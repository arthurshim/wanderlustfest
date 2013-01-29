<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/lib/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="/sites/all/themes/wanderlust/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>

<script>
  $.noConflict();
  jQuery(document).ready(function($) {
  	$("#emailClick, .email").click(function() {
  				$.fancybox.open('#mytable');
  	});
  });
</script>



<div class="joincontent">
                <table id="mytable" border="0" cellpadding="0" cellspacing="0">

                  <form method='get' name='oi_form' action='http://track.namastelight.com/oi/1/7a247953b9dcd02ea3275d0b3195bce6' onSubmit="return doSubmit(this);">
                  <tr>
                    <td colspan="2"><p class="title">Sign Up for the Wanderlust Mailing List</p></td>
                  </tr>
                  <tr>
                    <td width="180" valign="middle" style="padding:2px; ">Email*<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; "><input type='text' name='email' id="email" /></td>
                  </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; ">First Name<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; "><input type='text' name='FirstName' id="firstname" /></td>
                  </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; ">Last Name<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; "><input type='text' name='LastName' id="lastname" /></td>
                  </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; ">State/Province<span style="color:#841D0A;"></span></td>
                    <td valign="middle" style="padding:2px; "><select name='State/Prov' size='1' id="state">
                      <option value=''>Please Select</option>
                      <option value="">------ USA ------</option>
                              <option value='AL' >AL</option>
                              <option value='AK' >AK</option>
                              <option value='AZ' >AZ</option>
                              <option value='AR' >AR</option>
                              <option value='CA' >CA</option>
                              <option value='CO' >CO</option>
                              <option value='CT' >CT</option>
                              <option value='DE' >DE</option>
                              <option value='DC' >DC</option>
                              <option value='FL' >FL</option>
                              <option value='GA' >GA</option>
                              <option value='HI' >HI</option>
                              <option value='ID' >ID</option>
                              <option value='IL' >IL</option>
                              <option value='IN' >IN</option>
                              <option value='IA' >IA</option>
                              <option value='KS' >KS</option>
                              <option value='KY' >KY</option>
                              <option value='LA' >LA</option>
                              <option value='ME' >ME</option>
                              <option value='MD' >MD</option>
                              <option value='MA' >MA</option>
                              <option value='MI' >MI</option>
                              <option value='MN' >MN</option>
                              <option value='MS' >MS</option>
                              <option value='MO' >MO</option>
                              <option value='MT' >MT</option>
                              <option value='NE' >NE</option>
                              <option value='NV' >NV</option>
                              <option value='NH' >NH</option>
                              <option value='NJ' >NJ</option>
                              <option value='NM' >NM</option>
                              <option value='NY' >NY</option>
                              <option value='NC' >NC</option>
                              <option value='ND' >ND</option>
                              <option value='OH' >OH</option>
                              <option value='OK' >OK</option>
                              <option value='OR' >OR</option>
                              <option value='PA' >PA</option>
                              <option value='RI' >RI</option>
                              <option value='SC' >SC</option>
                              <option value='SD' >SD</option>
                              <option value='TN' >TN</option>
                              <option value='TX' >TX</option>
                              <option value='UT' >UT</option>
                              <option value='VT' >VT</option>
                              <option value='VA' >VA</option>
                              <option value='WA' >WA</option>
                              <option value='WV' >WV</option>
                              <option value='WI' >WI</option>
                              <option value='WY' >WY</option>
                      <option value="">----- CANADA -----</option>
                              <option value='AB' >AB</option>
                              <option value='BC' >BC</option>
                              <option value='LB' >LB</option>
                              <option value='MB' >MB</option>
                              <option value='NB' >NB</option>
                              <option value='NF' >NF</option>
                              <option value='NS' >NS</option>
                              <option value='NT' >NT</option>
                              <option value='ON' >ON</option>
                              <option value='PE' >PE</option>
                              <option value='QC' >QC</option>
                              <option value='SK' >SK</option>
                              <option value='YT' >YT</option>
                      <option value="">---------------</option>
                      <option value='Other' >OTHER</option>
                            </select></td>
                  </tr>
 <tr>
                    <td valign="middle" style="padding:2px; ">ZIP/Postal Code<span style="color:#841D0A;">*</span></td>
                    <td valign="middle" style="padding:2px; "><input type='text' name='Zip/PostalCode' id="postal_code" /></td>
                  </tr>
 <tr>
   <td valign="middle" style="padding:2px; ">Country<span style="color:#841D0A;"></span></td>
   <td valign="middle" style="padding:2px; "><select name='Country' size='1' id="country">
            <option value=''>Please Select</option>
            <option value='United States' >United States</option>
            <option value='Canada' >Canada</option>
<option value='Other' >OTHER</option>
          </select></td>
   </tr>
 <tr>
   <td valign="middle" style="padding:2px; ">How
     did you hear about us? </td>
   <td valign="middle" style="padding:2px; "><input type='text' name='HearAbout' /></td>
   </tr>
                  <tr>
                    <td valign="middle" style="padding:2px; font: normal normal 10px Arial, Helvetica, sans-serif; color:#545454;">
                    <input type='hidden' name='goto' value='' />
<input type='hidden' name='iehack' value='&#9760;' />
                    
                                          </td>
                    <td valign="middle" style="padding:2px; "><input type='submit' id="submit" value='Subscribe' /></td>
                  </tr>
                </form>
</table>
  
 </div>