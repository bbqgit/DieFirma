<?php

include './header.php';
?>

<script type="text/javascript" src="./js/clickListener.js"></script>

<div id='cssmenu'>
    <ul>
        <li class='active'><a href='#'><span>Mitarbeiter</span></a></li>
        <table border="1">
            <thead>

            </thead>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th><input type="text" name="ID" value="" /></th>
                </tr>
                <tr>
                    <th>Vorname</th>
                    <th><input type="text" name="Vorname" value="" /></th>
                </tr>
                <tr>
                    <th>Nachname</th>
                    <th><input type="text" name="Nachname" value="" /></th>
                </tr>
                <tr>
                    <th>Geschlecht</th>
                    <th>männlich<input type="radio" name="" value="m" />weiblich<input type="radio" name="" value="w" /></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th><input type="text" name="ID" value="" /></th>
                </tr>
                <tr>
                    <th>Abteilung</th>
                    <th><input type="text" name="Abteilung" value="" /></th>
                </tr>
                <tr>
                    <th>Stundenlohn</th>
                    <th><input type="number" name="Stundenlohn" value="" /></th>
                </tr>
                <tr>
                    <th>Vorgesetzer</th>
                    <th><input type="text" name="Vorgesetzer" value="" /></th>
                </tr>

                <tr>
                    <td colspan="2" align="center"><input type="submit" value="neu" /><input type="submit" value="suchen" /><input type="submit" value="bearbeiten" /></td>
                </tr>
            </tbody>
        </table>

    </ul>
</div>


<?php

include './footer.php';
?>