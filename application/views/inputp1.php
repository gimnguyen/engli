<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</head>

<body>
<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Câu hỏi part 1</h3>
    </div>
    <div class="col-md-12">
        <form action="<?php echo base_url()?>inputtoeicp1/process" enctype= "multipart/form-data"   method="post" id="insert-new">
            <div class="form-group">
                <label for="exampleInputEmail1">Bookcode</label>
                <input type="text" class="form-control" name="vbookcode">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Testcode <small>(Testcode bao gôm bookcode và Test ID Vd:67937<strong>01</strong>)</small></label>
                <input type="text" class="form-control" name="vtestcode">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Mp3 Url: public/books/p1/testcode/testcodea1.mp3</label><br>
                <label for="exampleFormControlFile1">Paragraph 1</label>
                <input type="file" name="vPara1" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 2</label>
                <input type="file" name="vPara2" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 3</label>
                <input type="file" name="vPara3" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 4</label>
                <input type="file" name="vPara4" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 5</label>
                <input type="file" name="vPara5" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 6</label>
                <input type="file" name="vPara6" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 7</label>
                <input type="file" name="vPara7" class="form-control-file" id="exampleFormControlFile1">
            </div><div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 8</label>
                <input type="file" name="vPara8" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 9</label>
                <input type="file" name="vPara9" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Paragraph 10</label>
                <input type="file" name="vPara10" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Correct Answers <small>Mỗi đáp án cách nhau bằng: (), {}, " " và viết HOA</small></label>
                <textarea class="form-control" name="vtrueAns" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Transcript</label>
                <textarea class="form-control" name="vtrans" rows="10" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</body>