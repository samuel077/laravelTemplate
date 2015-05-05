@extends('templates.mainTemplate')

@section('content')
<!--content in page Wrapper -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-7">
                        <h1 class="page-header" style="font-family:Microsoft JhengHei;">
				<strong>上傳新物件</strong>
                        </h1>
                        <ol class="breadcrumb col-lg-11">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> 上傳新物件
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form">
			    <!-- 
                            <div class="form-group">
                                <label>Text Input</label>
                                <input class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
			    -->
                            <div class="form-group">
                                <label><h2>物件標題</h2></label>
                                <input class="form-control" placeholder="Enter text">
                            </div>

                            <div class="form-group">
                                <label><h2>物件描述</h2></label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
			    <!-- 
                            <div class="form-group">
                                <label>Static Control</label>
                                <p class="form-control-static">email@example.com</p>
                            </div>
			    -->
			    <div class="form-group">
				<label><h2>上傳照片</h2></label>
			    </div>
			    <style>
  				.thumb {
    				height: 75px;
				border: 1px solid #000;
    				margin: 10px 5px 0 0;
  				}
			    </style>

			   <input type="file" id="files" name="files[]" multiple />
				<div class="container" style="margin-bottom:20px;">
			   <output id="list">
			   </output>
				</div>

			   <script>
			   function handleFileSelect(evt) {
	    		   var files = evt.target.files; // FileList object

    			   // Loop through the FileList and render image files as thumbnails.
    			   for (var i = 0, f; f = files[i]; i++) {

      			    // Only process image files.
	      		   if (!f.type.match('image.*')) {
        		   continue;
      			   }

      			   var reader = new FileReader();

      			   // Closure to capture the file information.
      			   reader.onload = (function(theFile) {
        		   return function(e) {
          		   // Render thumbnail.
          		   var span = document.createElement('span');
          		   span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          		   document.getElementById('list').insertBefore(span, null);
			   };
			   })(f);

			   // Read in the image file as a data URL.
			   reader.readAsDataURL(f);
			   	}
			   }

			   document.getElementById('files').addEventListener('change', handleFileSelect, false);
			</script> 
			    <!--  
			    <span class="btn btn-success fileinput-button">
			        <i class="glyphicon glyphicon-plus"></i>
			        <span>Add files...</span>
			        <input type="file" name="images[]" multiple="" style="top: 0;
				right: 0;
				margin: 0;
				position: absolute;
   	 			opacity: 0;
    				font-size: 200px;
				cursor: pointer;
    				direction: ltr;
				">
			    </span> -->
			    <!-- the image preview here -->
			
				
			    <!-- 
                            <div class="form-group">
                                <label>Checkboxes</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 1
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 2
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 3
                                    </label>
                                </div>
                            </div>
			    --> 
			    <!-- 
                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">3
                                </label>
                            </div>
			    -->
			    <!--
                            <div class="form-group">
                                <label>Radio Buttons</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                    </label>
                                </div>
                            </div>
			    -->
			    <!--
                            <div class="form-group">
                                <label>Inline Radio Buttons</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                </label>
                            </div>
			    -->
		 	    <!-- 
                            <div class="form-group">
                                <label>Selects</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
			    -->
			    <!--
                            <div class="form-group">
                                <label>Multiple Selects</label>
                                <select multiple class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
			    -->
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
		    <!--
                    <div class="col-lg-6"> -->
                        <!-- <h1>Disabled Form States</h1> -->

			<!-- 
                        <form role="form">

                            <fieldset disabled>

                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Disabled Checkbox
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Disabled Button</button>

                            </fieldset>

                        </form>
			-->
                        <!-- <h1>Form Validation</h1> -->
			<!-- 
                        <form role="form">

                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                            </div>

                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError">
                            </div>

                        </form>
			-->
			<!-- 
                        <h1>Input Groups</h1>

                        <form role="form">

                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon">
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                            </div>

                        </form>
			-->

			<!-- 
                        <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>
			-->
                    <!-- </div> -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

@stop
