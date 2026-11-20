<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->load->view('home');
    }
    public function about() {
        $this->load->view('about');
    }
    // public function home() {
        
    //     $this->load->view('home');
    // }


    public function pm() {
        $data['title'] = 'pm';
        $this->load->view('header', $data);
        $this->load->view('pm');
        $this->load->view('footer');
        }

    public function vm()  {
        $data['title'] = 'vm';
        $this->load->view('header', $data);
        $this->load->view('vm');
        $this->load->view('footer');
        }

    public function ot() {
        $data['title'] = 'ot';
        $this->load->view('header', $data);
        $this->load->view('ot');
        $this->load->view('footer');
        }

    public function or() {
        $data['title'] = 'or';
        $this->load->view('header', $data);
        $this->load->view('or');
        $this->load->view('footer');
        }

    public function ar() {
        $data['title'] = 'ar';
        $this->load->view('header', $data);
        $this->load->view('ar');
        $this->load->view('footer');
        }

    public function pai() {
        $data['title'] = 'pai';
        $this->load->view('header', $data);
        $this->load->view('pai');
        $this->load->view('footer');
        }

    public function paia() {
        $data['title'] = 'paia';
        $this->load->view('header', $data);
        $this->load->view('paia');
        $this->load->view('footer');
        }
    public function aboutpairobochamp() {
        $data['title'] = 'aboutpairobochamp';
        $this->load->view('header', $data);
        $this->load->view('aboutpairobochamp');
        $this->load->view('footer');
        }
    public function rr() {
        $data['title'] = 'rr';
        $this->load->view('header', $data);
        $this->load->view('rr');
        $this->load->view('footer');
        }
    public function ccce() {
        $data['title'] = 'ccce';
        $this->load->view('header', $data);
        $this->load->view('ccce');
        $this->load->view('footer');
        }
    public function gop() {
        $data['title'] = 'gop';
        $this->load->view('header', $data);
        $this->load->view('gop');
        $this->load->view('footer');
        }
    public function icts() {
        $data['title'] = 'icts';
        $this->load->view('header', $data);
        $this->load->view('icts');
        $this->load->view('footer');
        }
    public function el() {
        $data['title'] = 'el';
        $this->load->view('header', $data);
        $this->load->view('el');
        $this->load->view('footer');
        }
    public function ms() {
        $data['title'] = 'ms';
        $this->load->view('header', $data);
        $this->load->view('ms');
        $this->load->view('footer');
        }
    public function cl() {
        $data['title'] = 'cl';
        $this->load->view('header', $data);
        $this->load->view('cl');
        $this->load->view('footer');
        }
    public function gft() {
        $data['title'] = 'gft';
        $this->load->view('header', $data);
        $this->load->view('gft');
        $this->load->view('footer');
        }
    public function sfe() {
        $data['title'] = 'sfe';
        $this->load->view('header', $data);
        $this->load->view('sfe');
        $this->load->view('footer');
        }
    public function sfe2() {
        $data['title'] = 'sfe2';
        $this->load->view('header', $data);
        $this->load->view('sfe2');
        $this->load->view('footer');
        }
    public function hs() {
        $data['title'] = 'hs';
        $this->load->view('header', $data);
        $this->load->view('hs');
        $this->load->view('footer');
        }
    public function rsl() {
        $data['title'] = 'rsl';
        $this->load->view('header', $data);
        $this->load->view('rsl');
        $this->load->view('footer');
        }
    public function rsl2() {
        $data['title'] = 'rsl2';
        $this->load->view('header', $data);
        $this->load->view('rsl2');
        $this->load->view('footer');
        }
    public function gallery() {
        $data['title'] = 'gallery';
        $this->load->view('header', $data);
        $this->load->view('gallery');
        $this->load->view('footer');
        }
    public function contact() {
        $data['title'] = 'contact';
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
        }
    public function ss() {
        $data['title'] = 'ss';
        $this->load->view('header', $data);
        $this->load->view('ss');
        $this->load->view('footer');
        }
    public function cs() {
        $data['title'] = 'cs';
        // Load the header view
        $this->load->view('header', $data);
        // Load the workshop content view
        $this->load->view('cs');
        // Load the footer view
        $this->load->view('footer');
        }
    public function hardware() {
        $data['title'] = 'hardware';
        // Load the header view
        $this->load->view('header', $data);
        // Load the workshop content view
            $this->load->view('hardware');
        // Load the footer view
         $this->load->view('footer');
        }
    }
?>

