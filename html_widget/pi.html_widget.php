<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Html_widget {

    public $return_data = '';

    public function __construct()
    {
        $this->EE = get_instance();
    }

    public function get_html()
    {
        $html_code = $this->EE->TMPL->fetch_param('html_code');
        
        if ($html_code) {
            return "<div class=\"html-widget\">$html_code</div>";
        }

        return '';
    }

}

/* End of file pi.html_widget.php */
/* Location: ./system/user/addons/html_widget/pi.html_widget.php */
