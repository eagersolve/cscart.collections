{include file="views/profiles/components/profiles_scripts.tpl" states=1|fn_get_all_states}

{script src="js/tygh/filter_table.js"}
{script src="js/tygh/fileuploader_scripts.js"}

{script src="js/tygh/backend/addons_manage.js"}

{capture name="mainbox"}

<div class="items-container" id="addons_list">
    {hook name="addons:manage"}

    {if
        $auth.user_type === "UserTypes::ADMIN"|enum
        && !$auth.helpdesk_user_id
    }
        <div class="well well-small help-block">
            {include file = "buttons/helpdesk.tpl" btn_class="pull-right"}
            <p>{__("helpdesk_account.signed_out_message.marketplace")}</p>
        </div>
    {/if}

    {include file="views/addons/components/manage/addons_disabled_msg.tpl"}
    {include file="views/addons/components/addons_list.tpl"}

    {/hook}
<!--addons_list--></div>

{/capture}
{include file="common/mainbox.tpl"
    title=__("addons")
    content=$smarty.capture.mainbox
    sidebar=({include file="views/addons/components/manage/manage_sidebar.tpl"})
    adv_buttons=({include file="views/addons/components/manage/manage_adv_buttons.tpl"})
    buttons=({include file="views/addons/components/manage/manage_buttons.tpl"})
    select_storefront=true
    show_all_storefront=true
    storefront_switcher_param_name="storefront_id"
}
