<style>
	table {
		width:3000px !important;
	}
</style>

<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Property</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Property</h4>
                        </div>
                        <div class="card-body">
						 <form method="post" id="add_category" action="<?php  echo base_url('property/editpost');?>" enctype="multipart/form-data">
                            <input type="hidden" name="p_id" value="<?php echo isset($property_details['p_id'])?$property_details['p_id']:''?>" >
							<div class="row ">
                                
                              
                                   
                                        <div class="form-group col-md-6">
                                            <label>Property</label>
                                            <input  type="text" class="form-control" name="property" value="<?php echo isset($property_details['property'])?$property_details['property']:''?>">
                                        </div>
                                        
										
										
									    
										   </div>
										    <br>
										<div class="col-md-2 col-offset-md-3">
                                        <button type="submit" class="btn btn-primary ">
                                            Submit
                                        </button>
										</div>
                                   
                               
                          
							 </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#add_category').bootstrapValidator({
        
        fields: {
             city: {
                validators: {
					notEmpty: {
						message: 'City  is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Question wont allow <> [] = % '
					}
				}
            },
			
			
			
			
			
			
			
            }
        })
     
});

</script>
