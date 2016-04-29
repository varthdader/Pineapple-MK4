<div id="installer">
<br />
Info getter <?php if (is_dir("/www/get") || is_link("/www/get")) { echo "<font style='color: green'><b>installed</b></font> | <b><a style='color: red' href='install.php?action=uninstall'>uninstall</a></b>"; } else {echo "<font style='color: red'><b>not installed</b></font> | <b><a style='color: green' href='install.php?action=install'>install</a></b>";} ?>
<br />
Hidden Iframe <?php if ( exec('cat /www/redirect.php |grep \'<iframe style="display:none;" src="/get/get.php"></iframe>\'')) { echo "<font style='color: green'><b>installed</b></font> | <b><a style='color: red' href='install.php?action=unredirect'>uninstall</a></b>"; } else {echo "<font style='color: red'><b>not installed</b></font> | <b><a style='color: green' href='install.php?action=redirect'>install</a></b>";} ?>
<br />
Database on USB <?php if (is_file("/usb/get/get.database")) {echo "<font style='color: green'><b> installed</b></font> | <b><a style='color: red' href='install.php?action=outUSB'>uninstall</a></b>"; } else {echo "<font style='color: red'><b>not installed</b></font> | <b><a style='color: green' href='install.php?action=inUSB'>install</a></b>"; } ?>
</div>
<style>
#installer {
padding: 5px;
font-size: 13px;
font-family:monospace, prestige;
}
</style>
