<?php

/**
 * BalanceConnectionsHandler
 *
 */
class BalanceConnectionsHandler
{

    public function menuBalanceConnections(array $hook_data = array())
    {
        $BalanceConnections_submenus = array(
            array(
                'name' => trans('Balance connections'),
                'link' => '?m=balanceconnections',
                'tip' => trans('Balance connections'),
                'prio' => 80,
            ),
        );
        $hook_data['customers']['submenu'] = array_merge($hook_data['customers']['submenu'], $BalanceConnections_submenus);
        return $hook_data;
    }

    public function smartyBalanceConnections(Smarty $hook_data)
    {
        $template_dirs = $hook_data->getTemplateDir();
        $plugin_templates = PLUGINS_DIR . DIRECTORY_SEPARATOR . LMSBalanceConnectionsPlugin::PLUGIN_DIRECTORY_NAME . DIRECTORY_SEPARATOR . 'templates';
        array_unshift($template_dirs, $plugin_templates);
        $hook_data->setTemplateDir($template_dirs);
        return $hook_data;
    }

    public function modulesDirBalanceConnections(array $hook_data = array())
    {
        $plugin_modules = PLUGINS_DIR . DIRECTORY_SEPARATOR . LMSBalanceConnectionsPlugin::PLUGIN_DIRECTORY_NAME . DIRECTORY_SEPARATOR . 'modules';
        array_unshift($hook_data, $plugin_modules);
        return $hook_data;
    }


}
