<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
    </script>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?= base_url('admin'); ?>">Home</a>
                    </li>

                    <li>
                        <a href="#">Bibliography</a>
                    </li>
                    <li class="active">Add New Bibliography</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                        </span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>

                    <div class="ace-settings-box clearfix" id="ace-settings-box">
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                <label class="lbl" for="ace-settings-add-container">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        Add New Bibliography
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Add new bibliography data to the library database
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <form class="form-horizontal" role="form" method="post">
                            <div class="row form-group" style="display: flex; justify-content: flex-end; align-items: center;">
                                <div class="col-xs-2">
                                    <label for="form-field-1">Title</label>
                                </div>
                                <div class="col-xs-1" style="text-align: right;"><span>:</span></div>
                                <div class="col-xs-9">
                                    <input type="text" id="form-field-1" placeholder="Title" class="form-control" />
                                </div>
                            </div>

                            <div class="row form-group" style="display: flex; justify-content: flex-end; align-items: center;">
                                <div class="col-xs-2">
                                    <label for="form-field-tags">Author(s)</label>
                                </div>
                                <div class="col-xs-1" style="text-align: right;">
                                    <span>:</span>
                                </div>
                                <div class="col-xs-2">
                                    <div class="inline" style="display: flex; flex-wrap: wrap; align-items: center;">
                                        <input type="text" name="tags" id="form-field-tags" value="" style="width: 100%; box-sizing: border-box; flex: 1 1 auto; min-height: 150px; margin: 2px;" />
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form">
                                        <i class="ace-icon fa fa-plus"></i>
                                        Add Author
                                    </button>
                                </div>
                            </div>

                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Author</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <input type="text" id="author-name" name="authors" class="form-control">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <select id="personal-name" class="form-control">
                                                            <option>Personal Name</option>
                                                            <option>Corporate Name</option>
                                                            <option>Conference Name</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4 bg-primary">
                                                        <select id="author-role" class="form-control">
                                                            <option>Primary Author</option>
                                                            <option>Co-Author</option>
                                                            <option>Editor</option>
                                                            <option>Translator</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <textarea class="form-control" id="author-search" rows="3"
                                                        placeholder="Type to search for existing authors or to add a new one"></textarea>
                                                </div>
                                            </div>

                                            <!-- Insert button -->
                                            <button type="button" id="btn-insert-author" class="btn btn-primary">
                                                Insert To Bibliography
                                            </button>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" id="btn-save-author" class="btn btn-success">Simpan</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row form-group" style="display: flex; justify-content: flex-end; align-items: center;">
                                <div class="col-xs-2">
                                    <label for="form-field-1">Statement of Responsibility</label>
                                </div>
                                <div class="col-xs-1" style="text-align: right;"><span>:</span></div>
                                <div class="col-xs-9">
                                    <input type="text" id="form-field-1" placeholder="Statement of Responsibility" class="form-control" />
                                </div>
                            </div>

                            <div class="row form-group" style="display: flex; justify-content: flex-end; align-items: center;">
                                <div class="col-xs-2">
                                    <label for="form-field-1">Edition</label>
                                </div>
                                <div class="col-xs-1" style="text-align: right;"><span>:</span></div>
                                <div class="col-xs-9">
                                    <input type="text" id="form-field-1" placeholder="Edition" class="form-control" />
                                </div>
                            </div>

                            <div class="row form-group" style="display: flex; justify-content: flex-end; align-items: top;">
                                <div class="col-xs-2">
                                    <label for="form-field-1">Specific Detail Info</label>
                                </div>
                                <div class="col-xs-1" style="text-align: right;"><span>:</span></div>
                                <div class="col-xs-9">
                                    <textarea id="form-field-11" class="autosize-transition form-control" placeholder="Specific Detail Info"></textarea>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->
<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<script src="<?php echo base_url('assets/js/jquery-ui.custom.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/chosen.jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/spinbox.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-timepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-colorpicker.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.knob.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/autosize.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.inputlimiter.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.maskedinput.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-tag.min.js'); ?>"></script>

<script type="text/javascript">
    jQuery(function($) {
        if (!ace.vars['touch']) {
            $('.chosen-select').chosen({
                allow_single_deselect: true
            });
            //resize the chosen on window resize

            $(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({
                            'width': $this.parent().width()
                        });
                    })
                }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if (event_name != 'sidebar_collapsed') return;
                $('.chosen-select').each(function() {
                    var $this = $(this);
                    $this.next().css({
                        'width': $this.parent().width()
                    });
                })
            });


            $('#chosen-multiple-style .btn').on('click', function(e) {
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });
        }


        $('[data-rel=tooltip]').tooltip({
            container: 'body'
        });
        $('[data-rel=popover]').popover({
            container: 'body'
        });

        autosize($('textarea[class*=autosize]'));

        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-date').mask('01/01/2000');
        $('.input-mask-phone').mask('(+62) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999", {
            placeholder: " ",
            completed: function() {
                alert("You typed the following: " + this.val());
            }
        });

        //"jQuery UI Slider"
        //range slider tooltip example
        $("#slider-range").css('height', '200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [17, 67],
            slide: function(event, ui) {
                var val = ui.values[$(ui.handle).index() - 1] + "";

                if (!ui.handle.firstChild) {
                    $("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
                        .prependTo(ui.handle);
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('span.ui-slider-handle').on('blur', function() {
            $(this.firstChild).hide();
        });


        $("#slider-range-max").slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });

        $("#slider-eq > span").css({
            width: '90%',
            'float': 'left',
            margin: '15px'
        }).each(function() {
            // read initial values from markup and remove that
            var value = parseInt($(this).text(), 10);
            $(this).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });

        $("#slider-eq > span.ui-slider-purple").slider('disable'); //disable third item


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
        //pre-show a file name, for example a previously selected file
        //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'small' //large | fit
                //,icon_remove:null//set null, to hide remove/reset button
                /**,before_change:function(files, dropped) {
                	//Check an example below
                	//or examples/file-upload.html
                	return true;
                }*/
                /**,before_remove : function() {
                	return true;
                }*/
                ,
            preview_error: function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function() {
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });


        //$('#id-input-file-3')
        //.ace_file_input('show_file_list', [
        //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
        //{type: 'file', name: 'hello.txt'}
        //]);




        //dynamically change allowed formats by changing allowExt && allowMime function
        $('#id-file-format').removeAttr('checked').on('change', function() {
            var whitelist_ext, whitelist_mime;
            var btn_choose
            var no_icon
            if (this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "ace-icon fa fa-picture-o";

                whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
                whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
            } else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "ace-icon fa fa-cloud-upload";

                whitelist_ext = null; //all extensions are acceptable
                whitelist_mime = null; //all mimes are acceptable
            }
            var file_input = $('#id-input-file-3');
            file_input
                .ace_file_input('update_settings', {
                    'btn_choose': btn_choose,
                    'no_icon': no_icon,
                    'allowExt': whitelist_ext,
                    'allowMime': whitelist_mime
                })
            file_input.ace_file_input('reset_input');

            file_input
                .off('file.error.ace')
                .on('file.error.ace', function(e, info) {
                    //console.log(info.file_count);//number of selected files
                    //console.log(info.invalid_count);//number of invalid files
                    //console.log(info.error_list);//a list of errors in the following format

                    //info.error_count['ext']
                    //info.error_count['mime']
                    //info.error_count['size']

                    //info.error_list['ext']  = [list of file names with invalid extension]
                    //info.error_list['mime'] = [list of file names with invalid mimetype]
                    //info.error_list['size'] = [list of file names with invalid size]


                    /**
                    if( !info.dropped ) {
                    	//perhapse reset file field if files have been selected, and there are invalid files among them
                    	//when files are dropped, only valid files will be added to our file array
                    	e.preventDefault();//it will rest input
                    }
                    */


                    //if files have been selected (not dropped), you can choose to reset input
                    //because browser keeps all selected files anyway and this cannot be changed
                    //we can only reset file field to become empty again
                    //on any case you still should check files with your server side script
                    //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                });


            /**
            file_input
            .off('file.preview.ace')
            .on('file.preview.ace', function(e, info) {
            	console.log(info.file.width);
            	console.log(info.file.height);
            	e.preventDefault();//to prevent preview
            });
            */

        });

        $('#spinner1').ace_spinner({
                value: 0,
                min: 0,
                max: 200,
                step: 10,
                btn_up_class: 'btn-info',
                btn_down_class: 'btn-info'
            })
            .closest('.ace-spinner')
            .on('changed.fu.spinbox', function() {
                //console.log($('#spinner1').val())
            });
        $('#spinner2').ace_spinner({
            value: 0,
            min: 0,
            max: 10000,
            step: 100,
            touch_spinner: true,
            icon_up: 'ace-icon fa fa-caret-up bigger-110',
            icon_down: 'ace-icon fa fa-caret-down bigger-110'
        });
        $('#spinner3').ace_spinner({
            value: 0,
            min: -100,
            max: 100,
            step: 10,
            on_sides: true,
            icon_up: 'ace-icon fa fa-plus bigger-110',
            icon_down: 'ace-icon fa fa-minus bigger-110',
            btn_up_class: 'btn-success',
            btn_down_class: 'btn-danger'
        });
        $('#spinner4').ace_spinner({
            value: 0,
            min: -100,
            max: 100,
            step: 10,
            on_sides: true,
            icon_up: 'ace-icon fa fa-plus',
            icon_down: 'ace-icon fa fa-minus',
            btn_up_class: 'btn-purple',
            btn_down_class: 'btn-purple'
        });

        //$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
        //or
        //$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
        //$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


        //datepicker plugin
        //link
        $('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            //show datepicker when clicking on the icon
            .next().on(ace.click_event, function() {
                $(this).prev().focus();
            });

        //or change it into a date range picker
        $('.input-daterange').datepicker({
            autoclose: true
        });


        //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
        $('input[name=date-range-picker]').daterangepicker({
                'applyClass': 'btn-sm btn-success',
                'cancelClass': 'btn-sm btn-default',
                locale: {
                    applyLabel: 'Apply',
                    cancelLabel: 'Cancel',
                }
            })
            .prev().on(ace.click_event, function() {
                $(this).next().focus();
            });


        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function() {
            $(this).prev().focus();
        });




        if (!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        }).next().on(ace.click_event, function() {
            $(this).prev().focus();
        });


        $('#colorpicker1').colorpicker();
        //$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe

        $('#simple-colorpicker-1').ace_colorpicker();
        //$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
        //$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
        //var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
        //picker.pick('red', true);//insert the color if it doesn't exist


        $(".knob").knob();

        var $tag_input = $('#form-field-tags');

        try {
            $tag_input.tag({
                placeholder: "Enter Author(s)",
                source: ace.vars['US_STATES'],
                delimiter: /[\n\t]/
            });

            var $tag_obj = $tag_input.data('tag');

            $tag_input.on('added removed', function() {
                var allTags = $tag_obj.values;
                $tag_input.val(allTags.join(';')); // pisahkan dengan titik koma
            });

        } catch (e) {
            $tag_input.after('<textarea id="' + $tag_input.attr('id') +
                '" name="' + $tag_input.attr('name') +
                '" rows="3">' + $tag_input.val() + '</textarea>').remove();
            autosize($('#form-field-tags'));
        }

        /////////
        // === Chosen di dalam Modal ===
        $('#modal-form').on('shown.bs.modal', function() {
            if (!ace.vars['touch']) {
                // cara 1: atur width setelah modal muncul
                $(this).find('.chosen-container').each(function() {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });

                // cara 2 (lebih rapi): inisialisasi chosen setelah modal terlihat
                $(this).find('.modal-chosen').chosen({
                    width: '210px'
                });
            }
        });

        $('#btn-save-author').on('click', function() {
            var name = $('#author-name').val();

            var oldVal = $('#form-field-tags').val();
            var newVal = oldVal ? oldVal + '; ' + name : name;

            var tag_obj = $('#form-field-tags').data('tag');
            tag_obj.add(name);

            // tutup modal
            $('#modal-form').modal('hide');

            // reset field modal
            $('#author-name').val('');
            $('#personal-name').prop('selectedIndex', 0);
            $('#author-role').prop('selectedIndex', 0);
            $('#author-search').val('');
        });

        $(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            $('.limiterBox,.autosizejs').remove();
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

    });
</script>
<?= $this->endSection(); ?>