<?php
/**
*
* @package phpBB Extension - tas2580 Mobile Notifier
* @copyright (c) 2015 tas2580 (https://tas2580.net)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace tas2580\mobilenotifier\acp;

class mobilenotifier_module
{
	var $u_action;

	public function main($id, $mode)
	{
		global $config, $user, $template, $request, $phpbb_container, $phpbb_root_path, $phpEx;

		$user->add_lang_ext('tas2580/mobilenotifier', 'common');
		$wa = $phpbb_container->get('tas2580.mobilenotifier.src.helper');
		$this->tpl_name = 'acp_mobilenotifier_body';
		$this->page_title = $user->lang('ACP_MOBILENOTIFIER_TITLE');
		$data_foler = $phpbb_root_path . 'ext/tas2580/mobilenotifier/vendor/Chat-API/wadata';

		add_form_key('acp_mobilenotifier');

		// Form is submitted
		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_mobilenotifier'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$config->set('whatsapp_sender', $request->variable('sender', ''));
			$config->set('whatsapp_password', $request->variable('password', ''));
			$config->set('whatsapp_status', $request->variable('status', ''));
			$config->set('whatsapp_default_cc', $request->variable('default_cc', ''));

			$wa->update_status($config['whatsapp_status']);

			if ($request->file('image'))
			{
				include_once($phpbb_root_path . 'includes/functions_upload.' . $phpEx);
				$upload = new \fileupload();
				$upload->set_allowed_extensions(array('jpg', 'png', 'gif'));
				$file = $upload->form_upload('image');
				if ($file->filename)
				{
					$wa->update_picture($file->filename);
				}
			}

			trigger_error($user->lang('ACP_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'DATA_WRITABLE'				=> is_writable($data_foler),
			'DATA_FOLDER_NOT_WRITABLE'	=> $user->lang('DATA_FOLDER_NOT_WRITABLE', $data_foler),
			'WA_VERSION'					=> \Constants::WHATSAPP_VER,
			'U_ACTION'					=> $this->u_action,
			'SENDER'						=> isset($config['whatsapp_sender']) ? $config['whatsapp_sender'] : '',
			'PASSWORD'					=> isset($config['whatsapp_password']) ? $config['whatsapp_password'] : '',
			'STATUS'						=> isset($config['whatsapp_status']) ? $config['whatsapp_status'] : '',
			'CC_SELECT'					=> $wa->cc_select(isset($config['whatsapp_default_cc']) ? $config['whatsapp_default_cc'] : ''),
		));
	}
}
