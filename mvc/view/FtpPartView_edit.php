    <div class="content-container"> 
        <div class='leftCol1'>
                <p>Nazwa użytkownika:</p>
        </div>
        <div class='leftCol2'>
                <p>Katalog domowy:</p>
        </div>

        <div class="rightCol1">
            <input type="text" id="nameField"  name="nameField" placeholder="Nazwa" <?php echo "value='{$id}'"?> oninput="homeDirAutoFill(); validateUserData();" required/>
        </div>
        <div class='rightCol2'>
            <input type='text' id='homeDirField' name='homeDirField' <?php echo "value='{$ftpModel->getHomeDir()}'"?>  required/>
        </div>
        <div class="leftCol3">
            <label for="needsPassChange">Zmienić hasło?</label>
        </div>
        <div class="rightCol3">
            <input type="checkbox" id="needsPassChange" name="needsPassChange"/>
        </div>
        <div class="leftCol4">
            <label for="needsPassChange">UID</label>
        </div>
        <div class="rightCol4">
            <input id="uid" name="uid" <?php echo "value='{$ftpModel->getUid()}'" ?> required/>
        </div>
	<div class="leftCol5">
		<p>Quota (MB):</p>
	</div>
	<div class="rightCol5">
		<input id="quota" name="quota" <?php echo"value='{$ftpModel->getQuota()}'"?> required/>
	</div>
    </div>
    <span class="internav">
        <button type="submit" class="actionbutton" name="postData">OK</button>
        <a href="/?view=FtpUserListView" class="button-link">Anuluj</a>
    </span>
