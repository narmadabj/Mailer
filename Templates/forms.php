
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">

                        <form role="form">
          
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" name = "Subject" Id = "Subject" placeholder="<?php echo _('Enter Subject');?>">
                            </div>

							<div class="form-group">
                                <label>Sender's Name</label>
                                <input class="form-control" name = "fromName" Id = "fromName" placeholder="<?php echo _('Enter Name');?>">
                            </div>
							
							<div class="form-group">
                                <label>Sender's Email</label>
                                <input class="form-control" name = "fromEmail" Id = "fromEmail" placeholder="<?php echo _('Enter Email');?>">
                            </div>
							
							<div class="form-group">
                                <label>Recipient's Email</label>
                                <input class="form-control" name = "toEmail" Id = "toEmail" placeholder="<?php echo _('Recipient Email');?>">
                            </div>
							
                            <div class="form-group">
                                <label>Text</label>
                                <textarea class="form-control" name = "plainText" Id = "plainText" rows="3"></textarea>
                            </div>
>

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                    <div class="col-lg-8">
                        <form role="form">
							  <div class="form-group">
										<label>HTML Editor</label>
										<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
										<textarea class="ckeditor" name="editor" id="editor"></textarea>
							  </div>
						</form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
