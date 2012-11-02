 
FORM FOR SIDEBARS

<form action="http://cl.exct.net/subscribe.aspx?lid=17649743" name="subscribeForm" method="post" class="email-signup">
<input type="hidden" name="thx" value="http://<?php print $_SERVER['SERVER_NAME']; ?>/email/thankyou/" />
<input type="hidden" name="err" value="http://<?php print $_SERVER['HTTP_HOST']; ?>/email/error/" />
<input type="hidden" name="MID" value="119246" />
<input type="hidden" name="Email Type" value="HTML" />
<input type="hidden" name="SubAction" value="sub_add_update" />
<input type="hidden" name="Full Name" value="" />
<input type="text" name="Email Address" id="et-email-field" />
<input type="submit" value="Submit" class="email-submit" />
</form>



FORM FOR EMAIL SIGN UP PAGE


<form action="http://cl.exct.net/subscribe.aspx" name="subscribeForm" method="post" class="email-signup">
<input type="hidden" name="thx" value="http://<?php print $_SERVER['SERVER_NAME']; ?>/email/thankyou/" />
<input type="hidden" name="err" value="http://<?php print $_SERVER['HTTP_HOST']; ?>/email/error/" />
<input type="hidden" name="MID" value="119246" />
<input type="hidden" name="Email Type" value="HTML" />
<input type="hidden" name="SubAction" value="sub_add_update" />


<table>
   <tr>
      <td align="right">First Name</td>
      <td><input type="text" name="First Name" value="" /></td>
    </tr>

    <tr>
      <td align="right">Last Name</td>
      <td><input type="text" name="Last Name" value="" /></td>
    </tr>

    <tr>
      <td align="right">Email Address</td>
      <td><input type="text" name="Email Address" id="et-email-field" /></td>
    </tr>

    <tr>
      <td align="right">Zip</td>
      <td><input type="text" name="Zip" value="" /></td>
    </tr>


    <tr>
      <td align="right"></td>
      <td><input name="lid" type="checkbox" checked="checked" value="15928006"> Wanderlust California</td>
    </tr>

    <tr>
      <td align="right"></td>
      <td><input name="lid" type="checkbox" checked="checked" value="17108235"> Wanderlust Vermont</td>
    </tr>
    
    <tr>
      <td align="right"></td>
      <td><input name="lid" type="checkbox" checked="checked" value="17679020"> Wanderlust Colorado</td>
    </tr>    
    
    <tr>
      <td align="right"></td>
      <td><input name="lid" type="checkbox" checked="checked" value="17784076"> Wanderlust Whistler</td>
    </tr>
    
    <tr>
      <td></td>
      <td><input type="submit" value="Submit" class="email-submit" /></td>
    </tr>
    
</table>    
</form>    