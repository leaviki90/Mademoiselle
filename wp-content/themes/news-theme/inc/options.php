<?PHP

function newsTheme_option_page() {
    add_menu_page(
            "Option Page",
            "NewsTheme Options",
            "administrator",
            "option_page",
            "newsTheme_contact_data",
            "dashicons-id",
            19);
}

add_action("admin_menu", "newsTheme_option_page");

function newsTheme_contact_settings() {
    register_setting("newsTheme_contact_data", "newstheme_address");
    register_setting("newsTheme_contact_data", "newstheme_phone");
    register_setting("newsTheme_contact_data", "newstheme_email");
}

add_action("init", "newsTheme_contact_settings");

function newsTheme_contact_data() {
    ?>
    <h1>NewsTheme Contact Data</h1>
    <form method="post" action="options.php">
        <?PHP
        settings_fields("newsTheme_contact_data");
        do_settings_sections("newsTheme_contact_data");
        ?>
    <table class="form-table">
            <tr>
                <th>Address:</th>
                <td>
                    <input type="text" name="newstheme_address" value="><?PHP
                    echo esc_attr(get_option("newstheme_address"));
                    ?>">
                </td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>
                    <input type="text" name="newstheme_phone" value="<?PHP
                echo esc_attr(get_option("newstheme_phone"));
                    ?>">
                </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>
                    <input type="email" name="newstheme_email" value="<?PHP
                echo esc_attr(get_option("newstheme_email"));
                ?>">
                </td>
            </tr>
        </table>
    
    <?PHP submit_button(); ?>
</form>
<?PHP
}