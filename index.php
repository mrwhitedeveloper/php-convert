<?php
include 'HtmlToDoc.class.php';

if (isset($_REQUEST['frm'])) {
    $htmlToDoc = new HtmlToDoc();
    // convert html from url
    // $htmlToDoc->createDocFromURL( "http://google.com", "output", true );
    // or from hdd
    $htmlToDoc->createDocFrom($_REQUEST['content'], "a.doc", true);
}

if (isset($_REQUEST['frm2'])) {
    $htmlToDoc = new HtmlToDoc();
    // convert html from url
    // $htmlToDoc->createDocFromURL( "http://google.com", "output", true );
    // or from hdd
    $htmlToDoc->createDoc($_REQUEST['fname'], "a.doc", true);
}
?>

<form method="POST" action="">
    <input type="hidden" name="frm" />
    <label for="fname">Content:</label><br>
    <textarea type="text" id="content" name="content">
</textarea>

    <input type="submit" value="Submit">
</form>

<form method="POST" action="">
    <input type="hidden" name="frm2" />
    <label for="fname">File Content:</label><br>
    <input type="text" name="fname" />

    <input type="submit" value="Submit">
</form>
