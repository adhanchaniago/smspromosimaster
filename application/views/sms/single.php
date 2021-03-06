
<!-- BEGIN PAGE -->
<div id="main-content">
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12">
                    
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
          Single SMS
        </h3>
        <ul class="breadcrumb">
          <li>
              <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
          </li>
          <li><a href="#">SMS</a><span class="divider">&nbsp;</span></li>
          <li><a href="#">Single SMS</a><span class="divider-last">&nbsp;</span></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div id="page" class="dashboard"> 
        
        <div class="row-fluid">
          <div class="span12">
            <!-- BEGIN EXAMPLE TABLE widget-->
            <div class="widget">
              <div class="widget-title">
                  <h4><i class="icon-reorder"></i>Kirimkan Pesan Singkat</h4>
                  <span class="tools">
                      <a href="javascript:;" class="icon-chevron-down"></a>
                      <a href="javascript:;" class="icon-remove"></a>
                  </span>
              </div>
              <div class="widget-body">
                <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                
                
                <form action="<?=base_url()?>sms/prosessinglesms" role="form" method="post" class="form-horizontal">
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning" >No Telepon</label>

                    <div class="controls">
                       <input type="number" class="span4"  required name="notelp" placeholder="Input No Telepon" />
                       <span class="help-inline"></span>
                    </div>
                  </div> 
                  
                  <div class="control-group primary">
                    <label class="control-label" for="inputWarning">Isi Pesan</label>
                    <div class="controls">
                       
                       <textarea name="isipesan" rows='6' class="span6" placeholder="Tuliskan Pesan Anda Maximal 160 Karakter" onKeyDown="textCounter(this.form.isipesan,this.form.countDisplay);" onKeyUp="textCounter(this.form.isipesan,this.form.countDisplay);"></textarea>
                       <span class="help-inline"></span>

                    </div>
                    <div class="controls">
                      <input type='number' name='countDisplay' size='3' maxlength='3' value='160' style='width:10%; text-align:center; border:1px solid #cecece; margin-top:4px' readonly> Sisa Karakter
                    </div>
                    
                  </div>
                  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Kirimkan Pesan</button>
                    <button type="reset" class="btn btn-warning"><i class="icon-remove"></i>Hapus Pesan</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- END EXAMPLE TABLE widget-->
          </div>
        </div>               
    </div>
    <!-- END PAGE CONTENT-->
  </div>
  <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->


  


