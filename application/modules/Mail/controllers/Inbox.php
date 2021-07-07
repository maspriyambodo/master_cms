<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

//layanan.bimasislam@gmail.com
//R4h4514N394R4
    /*
     * connection hosting: $connection = imap_open('{poncosari.idweb.host:993/imap/ssl/novalidate-cert}INBOX', 'admin@maspriyambodo.com', 'JryZ3~l60Fj*') or die('Cannot connect to Gmail: ' . imap_last_error());
     * connection gmail  : $connection = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', 'layanan.bimasislam@gmail.com', 'R4h4514N394R4') or die('Cannot connect to Gmail: ' . imap_last_error());
     * jika error imap gmail gunakan imap.gmail.com:993/imap/ssl/novalidate-cert
     *  $emailData = imap_search($connection, 'UNSEEN');
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('M_Inbox', 'model');
        $this->user = $this->bodo->Dec($this->session->userdata('id_user'));
    }

    public function index() {
        $inbox = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', 'layanan.bimasislam@gmail.com', 'R4h4514N394R4') or die('Cannot connect to Gmail: ' . imap_last_error());
        $emails = imap_search($inbox, 'ALL');
        $emails = array_slice($emails, -10);
        rsort($emails);
        $content = array();
        foreach ($emails as $email) {
            $overview = imap_fetch_overview($inbox, $email, 0);
            $message = imap_fetchbody($inbox, $email, 2);
            $subject = $overview[0]->subject;
            $subject = imap_utf8($subject);
            $subject = utf8_decode($subject);
            $content[] = array(
                'seen' => $overview[0]->seen,
                'flagged' => $overview[0]->flagged,
                'from' => $overview[0]->from,
                'subject' => $subject,
                'date' => $overview[0]->date
            );
        }
        print_array($content);
    }

}
