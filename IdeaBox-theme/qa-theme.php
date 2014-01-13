<?php

$theme_dir = dirname( __FILE__ ) . '/';
$theme_url = qa_opt('site_url') . 'qa-theme/' . qa_get_site_theme() . '/';
qa_register_layer('/qa-admin-options.php', 'Theme Options', $theme_dir , $theme_url );

	class qa_html_theme extends qa_html_theme_base
	{

		function head_metas()
		{
			qa_html_theme_base::head_metas();
			$this->output('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">');
		}
		
		function head_script()
		{
			qa_html_theme_base::head_script();
			
			$this->output('
				<script type="text/javascript">
				$(document).ready(function(){
					$(".menu_show_hide").click(function(){
						$(".qa-nav-main").slideToggle();
					});

				$(window).resize(function() {
					if ($(window).width()>720) {$(".qa-nav-main").show();}else{$(".qa-nav-main").hide();}
				});
				}
				);
				</script>');

		}
		function head_css()
		{
			if (qa_opt('qat_compression')==2) //Gzip
				$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'.$this->rooturl.'qa-styles-gzip.php'.'"/>');
			elseif (qa_opt('qat_compression')==1) //CSS Compression
				$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'.$this->rooturl.'qa-styles-commpressed.css'.'"/>');
			else // Normal CSS load
				$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'.$this->rooturl.$this->css_name().'"/>');
			
			if (isset($this->content['css_src']))
				foreach ($this->content['css_src'] as $css_src)
					$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'.$css_src.'"/>');
					
			if (!empty($this->content['notices']))
				$this->output(
					'<STYLE><!--',
					'.qa-body-js-on .qa-notice {display:none;}',
					'//--></STYLE>'
				);
		}		
		

		function body_content()
		{
			$this->body_prefix();
			$this->notices();
			


			$this->header();
			$this->output('<DIV CLASS="qa-body-wrapper">', '');

			$this->widgets('full', 'top');
			$this->nav_main_sub();
			$this->output('<DIV CLASS="qa-sub-nav">');
			$this->nav('sub');
			$this->output('</DIV>');
			
			$this->widgets('full', 'high');
			$this->main();
			$this->sidepanel();
			$this->widgets('full', 'low');
			$this->output('</DIV> <!-- END body-wrapper -->');
			
			$this->footer();
			$this->widgets('full', 'bottom');

			$this->body_suffix();
		}
		function sidebar()
		{
			$this->output('<DIV CLASS="qa-sidebar-container">', '');
			$this->nav_user_search();
			$this->nav('user');
			qa_html_theme_base::sidebar();
			$this->output('</DIV>', '');
		}
		function header()
		{
			$this->output('<DIV CLASS="qa-header">');
			$this->output('<DIV CLASS="qa-header-box">');
			
			$this->logo();
			
			$this->header_clear();
			
			$this->output('</DIV>', '');
			$this->output('</DIV> <!-- END qa-header -->', '');
		}
		
		function nav_user_search()
		{
			$this->search();
		}
		
		function nav_main_sub()
		{
			if ( (qa_get_logged_in_level()>=QA_USER_LEVEL_ADMIN) || (!(qa_opt('qat_hide_nav'))) )
			$this->nav('main');
		}

		function nav($navtype, $level=null)
		{
			$navigation=@$this->content['navigation'][$navtype];
			if ($navtype=='main'){
				$this->output('<nav id="mobilenav"><a href="#" class="menu_show_hide">Menu</a></nav>');
			}
			global $qa_request;
			if ( ($navtype=='sub') && ($qa_request=='') && qa_opt('qat_show_sub_nav') ){
				$navigation=qa_qs_sub_navigation('hot',null);
			}
			
			
			if (($navtype=='user') || isset($navigation)) {
				$this->output('<DIV CLASS="qa-nav-'.$navtype.'">');
				
				if ($navtype=='user')
					$this->logged_in();
					
				// reverse order of 'opposite' items since they float right
				foreach (array_reverse($navigation, true) as $key => $navlink)
					if (@$navlink['opposite']) {
						unset($navigation[$key]);
						$navigation[$key]=$navlink;
					}
				
				$this->set_context('nav_type', $navtype);
				$this->nav_list($navigation, 'nav-'.$navtype, $level);
				$this->nav_clear($navtype);
				
				$this->clear_context('nav_type');
	
				$this->output('</DIV>');
			}
		}

		function view_count($post)
		{
			// do nothing
		}
		function a_count($post)
		{
			// do nothing
		}
		function theme_a_count($post)
		{
			qa_html_theme_base::a_count($post);
		}
		function theme_view_count($post)
		{
			qa_html_theme_base::view_count($post);
		}
		
		function post_meta_flags($post, $class)
		{ 
			$this->theme_a_count($post);
			$this->theme_view_count($post);
			qa_html_theme_base::post_meta_flags($post, $class);
		}
		
		function vote_buttons($post)
		{
			$this->output('<div class="qa-vote-buttons '.(($post['vote_view']=='updown') ? 'qa-vote-buttons-updown' : 'qa-vote-buttons-net').'">');

			switch (@$post['vote_state'])
			{
				case 'voted_up':
					$this->post_hover_button($post, 'vote_up_tags', 'Voted Up', 'qa-vote-one-button qa-voted-up');
					break;
					
				case 'voted_up_disabled':
					$this->post_disabled_button($post, 'vote_up_tags', 'Vote Up', 'qa-vote-one-button qa-vote-up');
					break;
					
				case 'voted_down':
					$this->post_hover_button($post, 'vote_down_tags', 'Voted Down', 'qa-vote-one-button qa-voted-down');
					break;
					
				case 'voted_down_disabled':
					$this->post_disabled_button($post, 'vote_down_tags', 'Vote Down', 'qa-vote-one-button qa-vote-down');
					break;
					
				case 'up_only':
					$this->post_hover_button($post, 'vote_up_tags', 'Vote Up', 'qa-vote-first-button qa-vote-up');
					$this->post_disabled_button($post, 'vote_down_tags', 'Vote Down', 'qa-vote-second-button qa-vote-down');
					break;
				
				case 'enabled':
					$this->post_hover_button($post, 'vote_up_tags', 'Vote Up', 'qa-vote-first-button qa-vote-up');
					$this->post_hover_button($post, 'vote_down_tags', 'Vote Down', 'qa-vote-second-button qa-vote-down');
					break;

				default:
					$this->post_disabled_button($post, 'vote_up_tags', 'Vote Up', 'qa-vote-first-button qa-vote-up');
					$this->post_disabled_button($post, 'vote_down_tags', 'Vote Down', 'qa-vote-second-button qa-vote-down');
					break;
			}

			$this->output('</div>');
		}

		function voting_inner_html($post)
		{
			$this->vote_count($post);
			$this->vote_buttons($post);
			$this->vote_clear();
		}
		
		function footer()
		{
			$this->output('<DIV CLASS="qa-wrap-footer">');
			
			qa_html_theme_base::footer();
			
			$this->output('</DIV> <!-- END qa-footer -->', '');
		}
		
		function attribution()
		{
			$this->output('<DIV CLASS="qat-qa-attribution">');
				$this->output('Designed by <A HREF="http://QA-Themes.com/" title="Free Q2A Themes and plugins">QA-Themes.com</A>, ');
				qa_html_theme_base::attribution();
			$this->output('</DIV>');
		}
	}

/*
	Omit PHP closing tag to help avoid accidental output
*/