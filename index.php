<?php
include 'HtmlToDoc.class.php';

if (isset($_REQUEST['frm'])) {
    $htmlToDoc = new HtmlToDoc();
    $htmlToDoc->createDocFrom($_REQUEST['content'], "html.doc", true);
}

if (isset($_REQUEST['frm2'])) {
    $htmlToDoc = new HtmlToDoc();
    $htmlToDoc->createDoc($_REQUEST['fname'], "html.doc", true);
}
if (isset($_REQUEST['frm2'])) {
    $htmlToDoc = new HtmlToDoc();
     $htmlToDoc->createDocFromURL($_REQUEST['fname'], "html.doc", true );
}
?>
<html>

<head>
    <title>Convert Html To Doc</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>
</body>
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <form method="POST" action="">
                <div class="form-group">
                    <input type="hidden" name="frm" />
                    <label for="fname">Content:</label><br>
                    <textarea class="form-control" type="text" id="content" name="content" rows="10"
                        placeholder="Html Content "></textarea>

                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="">
                <div class="form-group">
                    <input type="hidden" name="frm2" />
                    <label for="fname">File Content:</label><br>
                    <input class="form-control" type="text" name="fname" placeholder="Html file name " />

                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="">
                <div class="form-group">
                    <input type="hidden" name="frm3" />
                    <label for="fname">File Url:</label><br>
                    <input class="form-control" type="url" name="fname" placeholder="Html file Url " />

                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>

</div>
</body>

</html>
