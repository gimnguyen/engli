<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</head>

<body>
<div class="container">
    <form method="post" enctype= "multipart/form-data" action="<?php echo base_url()?>inputtoeicp4/process">
        <div class="form-group">
            <label for="exampleInputEmail1">Bookcode</label>
            <input type="text" class="form-control" name="vbookcode">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Testcode <small>(Testcode bao gÃ´m bookcode vÃ  Test ID)</small></label>
            <input type="text" class="form-control" name="vtestcode">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">MP3 (upload qua FTP: public/books/p3/testcode/testcodea3.mp3)</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Question (Má»—i cÃ¢u há»�i + Ä‘Ã¡p Ã¡n pháº£i náº±m trÃªn cÃ¹ng 1 dÃ²ng)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="vquest" rows="20"></textarea>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Correct Answers <small>Má»—i Ä‘Ã¡p Ã¡n cÃ¡ch nhau báº±ng: (), {}, " " vÃ  viáº¿t HOA</small></label>
            <textarea class="form-control" id="exampleFormControlTextarea2" name="vansw" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Transcript</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="vtrans" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">TÃ¡ch cÃ¢u há»�i</button>
    </form>
</div>
</body>