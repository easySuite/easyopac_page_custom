<?php

/**
 * @file
 * Custom template with markup.
 */
?>

<h1><?php print t("Registration for the library's newsletter"); ?></h1>
<div class="container2">
  <table border="0" cellpadding="2" class="myForm">
    <tbody>
    <tr>
      <td><form method="post" action="https://app.marketingplatform.com/ExtAccess/Form?form=6447" id="frmSS6447" onsubmit="return CheckForm6447(this);" style="padding: 10px 20px 10px 20px!important;">
          <table>
            <tbody>
            <tr>
              <td class="mptext" style="padding-top:20px;"><span class="required">*</span>&nbsp;E-mail:</td>
            </tr>
            <tr>
              <td><input type="text" name="email" class="mpinput"></td>
            </tr>
            <tr>
              <td class="mptext">&nbsp;Fornavn:</td></tr>
            <tr>
              <td><input type="text" class="form-control mpinput" name="CustomFields[2]" id="CustomFields_2_6447" value="" maxlength="50"></td>
            </tr>
            <tr>
              <td class="mptext" style="padding-bottom:20px;">&nbsp;Nyhedsbrev:</td></tr>
            <tr>
              <td>
                <label class="container" for="CustomFields[243985_6447]_B&oslash;rnekulturformidling">
                  <input type="checkbox" id="CustomFields[243985_6447]_B&oslash;rnekulturformidling" name="CustomFields[243985][]" value="B&oslash;rnekulturformidling">
                  <span class="checkmark"></span>B&oslash;rnekulturformidling
                </label>
                <br />
                <label class="container" for="CustomFields[243985_6447]_Voksenkulturformidling">
                  <input type="checkbox" id="CustomFields[243985_6447]_Voksenkulturformidling" name="CustomFields[243985][]" value="Voksenkulturformidling">
                  <span class="checkmark"></span>Voksenkulturformidling
                </label>
              </td>
            </tr>
            <tr style="display: none;">
              <td>&nbsp;&nbsp;&nbsp;&nbsp;First Name:</td>
              <td><input type="text" class="form-control" name="first_name_mp" id="first_name_mp" /></td>
            </tr>
            <tr>
              <td>For at forbedre modtagerens oplevelser anvender vi Tracking Pixels til at se statistikker over åbningsrater og interaktioner i vores kampagner. Ved tilmelding til nyhedsbrevet accepterer du derved brugen af Tracking Pixels.</td>
            </tr>
            <tr>
              <td><input type="submit" value="Tilmeld" class="mpbutton"></td>
            </tr>
            </tbody>
          </table>
        </form></td>
    </tr>
    </tbody>
  </table>
</div>
