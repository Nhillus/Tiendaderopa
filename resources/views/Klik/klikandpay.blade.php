<form method="POST" action="https://www.klikandpay.com/paiement/order1.pl" accept-charset="UTF8" id="knp-form" target="_top">
    {{csrf_field()}}
    <table border="0" cellpadding="2" cellspacing="0" width="20%">
    <meta charset="UTF-8">
    <tr>
    <td width="50%">Surname:</td>
    <td width="50%"><input type="text" name="NOM" size="24" value=""></td>
    </tr>
    <tr>
    <td width="50%">First name:</td>
    <td width="50%"><input type="text" name="PRENOM" size="24" value=""></td>
    </tr>
    <tr>
    <td width="50%">Address:</td>
    <td width="50%"><input type="text" name="ADDRESSE" size="24" value=""></td>
    </tr>
    <tr>
    <td width="50%">Postcode:</td>
    <td width="50%"><input type="text" name="CODEPOSTAL" size="24" value=""></td>
    </tr>
    <tr>
    <td width="50%">Town:</td>
    <td width="50%"><input type="text" name="VILLE" size="24" value=""></td>
    </tr>
    <tr>
    <td width="50%">Country:</td>
    <td width="50%"><select size="1" name="PAYS">
    <option value="CH" selected="selected">Switzerland</option>
    <option value="FR">France</option>
    </select>
    </td>
    </tr>
    <tr>
    <td width="50%">Tel:</font></td>
    <td width="50%"><input type="text" name="TEL" size="24" value=""></td>
    </tr>
    <tr>
    <td width="50%">E-mail:</font></td>
    <td width="50%"><input type="text" name="EMAIL" size="24" value=""></td>
    </tr>
    <input type="hidden" name="ID" value="1614302833">
    <input type="hidden" name="MONTANT" value="7">
    <tr>
    <td width="100%" colspan="2">
    <p align="center"><input type="submit" value="Send" name="B1"></p></td>
    </tr>
    </table>