@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      

        <!-- Main content -->
		<section class="content">
            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title"> Edit Proforma Invoice </h4>
                 {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form novalidate method="POST" action=" {{Route('buyerdetails.updateproforma',$editinvoiceData->id) }} " enctype="multipart/form-data" > <!--form-->
                        @csrf  
                         <div class="row">
                           <div class="col-12">	

                            <div class="row">
                              <div class="col-md-12"><!--col-6 stared here-->
                                  <div class="form-group">
                                      <h5>Selecct User<span class="text-danger">*</span></h5>
                                      <div class="controls">
                                          <select name="username" id="username" required  class="form-control">
                                              <option value="" selected="" disabled>Select User Name</option>
                                              @foreach ($userData as $row)
                                                  {{-- <option value=" {{$row->name}}"  > {{$row->name}} </option> --}}
                                                  <option value=" {{$row->name}}" {{ $editinvoiceData->username == "$row->name"?"selected":"" }} > {{$row->name}} </option>
                                              @endforeach

                                          </select>
                                      </div>
                                  </div>
                              </div><!--col-6 Ended here-->
                          </div>
                          <!--user name selection end here-->

                          <!--MAIN MACHINE SELECTION START HERE-->
                          <div class="row">
                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Select main Machine<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="main_machine_name[]" id="main_machine_name" required   class="form-control select2 newstyleselect" multiple="multiple" data-placeholder="Select Main machines">
                                            @foreach ($mainmachinename as $row2)
                                                <option value=" {{$row2->machine_name}}" > {{$row2->machine_name}} </option>
                                                {{-- <option value=" {{$row2->machine_name}}" {{ $editinvoiceData->main_machine_name == "$row2->machine_name"?"selected":"" }} > {{$row2->machine_name}} </option> --}}

                                            @endforeach 

                                        </select>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->
                        </div>
                         <!--main machine selection end here-->

                          <!--Sub MACHINE SELECTION START HERE-->
                          <div class="row">
                            <div class="col-md-12"><!--col-6 stared here-->
                                <div class="form-group">
                                    <h5>Select Sub Machine<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="sub_machine_name[]" id="sub_machine_name" required  class="form-control select2 newstyleselect" multiple="multiple" data-placeholder="Select Sub machines">
                                            @foreach ($subMachineData as $row2)
                                                <option value=" {{$row2->sub_machine_name}} " {{ $editinvoiceData->sub_machine_name == "$row2->sub_machine_name"? "selected":"" }} > {{$row2->sub_machine_name}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div><!--col-6 Ended here-->
                        </div>
                         <!--Sub machine selection end here-->

                            <!--row Stared here-->
                            <div class="row">

                                <div class="col-md-12"><!--col-6 stared here-->
                                    <div class="form-group">
                                        <h5>Total Price<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="total_price" value="{{ $editinvoiceData->total_price }}"  class="form-control"  required="" aria-invalid="false"> </div>
                                    </div>
                                </div><!--col-6 Ended here-->

                                

                            </div>
                            <!--row Ended here-->
                           </div>
                         </div>


                              <!--row Stared here-->
                            <div class="row">
                                <!--col-6 stared here-->
                                <div class="col-md-12">


                                    <div class="form-group row">
                                        {{-- <label class="col-form-label col-lg-2">Custom BS file input</label> --}}
                                        <div class="col-md-12">
                                            <h5>Choose Machine Invoice </h5>
                                            <div class="custom-file">
                                                <input type="file" name="upload_invoice[]"  class="form-control" accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  id="upload_invoice" multiple >
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                    $invoiceEditDoc = explode('|' , $editinvoiceData->upload_invoice)
                                @endphp
                                @foreach ($invoiceEditDoc as $item)
                                    @if ($item == true)
                                       <!--show document here-->
                                       <div style="width: 100% !important; height:240px !important;padding: 20px 10px ">
                                        <a href="{{ URL::to($item) }}" target="_blank" >
                                            <div class="mailbox-attachment-info"  style="width:200px;">
                                                <span class="mailbox-attachment-icon" style="background: rgba(221, 25, 25, 0.808)"><i class="fa fa-file-pdf-o"></i></span>
                                              <a href="{{ URL::to($item) }}" target="_blank" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i>  {{ $editinvoiceData->username.'.pdf' }} </a>
                                                  <span class="mailbox-attachment-size" >
                                                   Click to view
                                                    <a href="{{ URL::to($item) }}" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                                                  </span>
                                            </div>
                                            </a>
                                       </div>
                                       <!--show document end here-->
                                    @else
                                        <span> no invoice is present here </span>
                                    @endif
                                @endforeach
                                     <!--image display after selecting UISNG AJEX-->

                                
                                    <!--image display ended here-->

                                </div><!--col-6 Ended here-->

                            </div>
                            <!--row Ended here-->
                           
                           <br><br>
                           <div class="text-xs-right">
                               <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                           </div>
                       </form><!--form-->
   
                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->
   
           </section>
           <!-- /.content -->

   
    
    </div>
</div>
<!-- /.content-wrapper -->



@endsection
