<section id="main-content">
        <section class="wrapper">
        <!-- page start-->
	
        
        <div class="row">
            <div class="col-sm-12">
			<div class="col-xs-12" id="breadcrumb" style="background-color:#1FB5AD; margin-bottom:20px; font-size:15px; color:#fff;">
					<ol class="breadcrumb pull-left" style="background-color:#1FB5AD !important;">
						<li><a href="<?php $u_role=$this->session->userdata('u_role'); if($u_role==2){ echo $admin_url = base_url()."dashboard/agent"; 
				}elseif($u_role==3){ echo $admin_url = base_url()."dashboard/user"; }else { echo $admin_url = base_url()."admin"; }?>"> Dashboard </a></li>
						<li> XML Feed Format </li>
					</ol>
					<button type="button" onclick="location.href='<?php echo base_url()."admin/property/xml_download"?>'" class="btn btn-round btn-primary"> Download Sample Format <i class="fa fa-download"></i> </button> 
			</div>
                <section class="panel">     
					<div class="panel-body">
							
<pre>&lt;?xml version="1.0" encoding="UTF-8"?&gt;
		&lt;ynh version="1.6"&gt;
			&lt;properties&gt;
			&lt;property type="rental|sale" status="active|off-market|temp-off-market|in-contract|contract-out|contract-signed|sold|rented"
      id="unique id" url="external url for the property"&gt;
				&lt;propertyname/&gt; 
				&lt;overview/&gt;
				&lt;propertytype&gt;
					&lt;Openhouses/&gt;
					&lt;Multifamilies/&gt;
					&lt;other/&gt;
				&lt;/propertytype&gt;
				&lt;address&gt;
					&lt;location/&gt;
					&lt;landmarks/&gt;
					&lt;city/&gt;
					&lt;state/&gt;
					&lt;country/&gt;
				&lt;/address&gt;
				&lt;details&gt;
					&lt;startingprice/&gt;
					&lt;lastprice/&gt;
					&lt;bedrooms/&gt;
					&lt;bathrooms/&gt;
					&lt;squareFeet/&gt;
					&lt;schooldistricts/&gt;
					&lt;policeprecincts/&gt;
					&lt;buses&gt; 
						&lt;m1/&gt;
						&lt;m2/&gt;
						&lt;other/&gt; &lt;!-- other trains --&gt;
					&lt;/buses&gt;
					&lt;train&gt; 
						&lt;t1/&gt;
						&lt;t2/&gt;
						&lt;other/&gt; &lt;!-- other trains --&gt;
					&lt;/train&gt;
					&lt;/details&gt;
					&lt;amenities&gt;
						&lt;listingamenities&gt;
							&lt;dishwahser/&gt;
							&lt;fireplace/&gt;
							&lt;washman/&gt;
							&lt;other/&gt; &lt;!-- A comma delimited string of other amenities --&gt;
						&lt;/listingamenities&gt;
						&lt;buildingamenities&gt;
							&lt;doorman/&gt;
							&lt;gym/&gt;
							&lt;pool/&gt;
							&lt;other/&gt; &lt;!-- A comma delimited string of other amenities --&gt;
						&lt;/buildingamenities&gt;
						&lt;listinginclude&gt;
							&lt;video/&gt;
							&lt;address/&gt;
							&lt;other/&gt; &lt;!-- A comma delimited string of other amenities --&gt;
						&lt;/listinginclude&gt;  
					&lt;/amenities&gt;
					&lt;featuredimage&gt;
						&lt;url/&gt;
					&lt;/featuredimage&gt;
					&lt;images&gt;
						&lt;url/&gt;
						&lt;other/&gt; &lt;!-- A comma delimited string of other image --&gt;
					&lt;/images&gt;
				
				&lt;featured type="active|in active" &gt; &lt;/featured&gt;
				&lt;/property&gt;
			&lt;/properties&gt;
		&lt;/ynh&gt;
</pre>
							
                    </div>
                </section>
			</div>
		</div>
	</section>
</section>



				

