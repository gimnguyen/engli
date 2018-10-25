<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/style.css" >
</head>

<body>
<div class="container">
    <form method="post" enctype= "multipart/form-data" action="<?php echo base_url()?>inputtoeicp5/save">
        <div class="form-group">
            <label ><?php echo $glist?></label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Kết quả: </label>
            <label ><?php echo $gAnslist?></label>
        </div>
        <div class="form-group non-dis">
            <textarea class="form-control" id="exampleFormControlTextarea1" name="vquest" rows="20"><?php echo $glist?></textarea>
        </div>
        <div class="form-group non-dis">
            <textarea class="form-control" id="exampleFormControlTextarea2" name="vansw" rows="5"><?php echo $gAnslist?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
</div>
</body>