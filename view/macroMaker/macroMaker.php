<div class="textBox">
    <?php
    $action = $api->content->MacroIcon()->one(72);
    $imgpath=$action->IconHD;
    $image= '<img id="macroIcon" src="https://xivapi.com/'.$imgpath.'">';
    //var_dump($action);
    ?>
    
    <form method="post" action="index.php">       
        <div class="comboBoxes">
            <p>Copy the :</p>
            <select name="fromClass" id="fromClass">
              <option value="GLA">GLA</option>
              <option value="MRD">MRD</option>
              <option value="LNC">LNC</option>
              <option value="PGL">PGL</option>
              <option value="ROG">ROG</option>
              <option value="ARC">ARC</option>
              <option value="THM">THM</option>
              <option value="ACN">ACN</option>
              <option value="CNJ">CNJ</option>
              <option value="current">current</option>
            </select>
            <p>to the :</p>
            <select name="toClass" id="toClass">
              <option value="GLA">GLA</option>
              <option value="MRD">MRD</option>
              <option value="LNC">LNC</option>
              <option value="PGL">PGL</option>
              <option value="ROG">ROG</option>
              <option value="ARC">ARC</option>
              <option value="THM">THM</option>
              <option value="ACN">ACN</option>
              <option value="CNJ">CNJ</option>
              <option value="current">current</option>        
            </select>
        </div>
        <br>Hotbars :
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="1">1
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="2">2
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="3">3
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="4">4
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="5">5
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="6">6
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="7">7
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="8">8
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="9">9
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" name="from[]" value="10">10
        </label>
        
    <p><button class="middle" type="submit" name="macroMaker" value="Submit">Submit</button></p>
    </form><br>
    
    <strong><?= $msg ?></strong>

    <div class="fakeMacroFFXIV">
        <p>
            <div class="macroTop">
                <?php echo $image; ?><textarea id="topMacroTextArea" readonly>Copy one class to an other</textarea><br>
            </div>
            <div class="macroBottom">
                <textarea class="js-copytextarea" readonly><?= $appendTextArea ?></textarea><br>
                <button class="js-textareacopybtn" style="vertical-align:top;">Copy to Clipboard</button>
            </div>            
        </p>
    </div>   


</div>


    
<script>
    var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

    copyTextareaBtn.addEventListener('click', function(event) {
        var copyTextarea = document.querySelector('.js-copytextarea');
        copyTextarea.focus();
        copyTextarea.select();

        try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
        } catch (err) {
        console.log('Oops, unable to copy');
        }
    });
    
    const tx = document.getElementsByTagName("textarea");
    for (let i = 0; i < tx.length; i++) {
      tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
      tx[i].addEventListener("input", OnInput, false);
    }

    function OnInput() {
      this.style.height = "auto";
      this.style.height = (this.scrollHeight) + "px";
    }    
</script>