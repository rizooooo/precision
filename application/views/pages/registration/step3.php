<div>
  
  <h3>Security Questions</h3>
  <small class="text-muted"><strong>Please establish a security profile, to ensure your access ability in the event you forget your password. You need to select a question from the dropdown list and provied an answer to it.</strong></small>
  <div class="well top-buffer-10">
  
     <?php echo form_open('registration/submit/3',  array('id' => 'form_step_3')); ?>  
    <div class="row">
      <div class="col-md-12">
        <div class="template hide" id="questions"></div>
        <div class="form-group">
          <label class="control-label" for="Q1">Question #1</label> <select class="form-control input-sm questions" id="Q1" name="Q1">
        </select>
        
        <input type="text" name="question_1" id="question_1" hidden>

        <input class="inputs form-control top-buffer-10 input-sm" id="answer1" name="answer1" placeholder="Enter answer to question #1" type="text">
       
      </div>
      <div class="form-group">
        <label class="control-label" for="Q2">Question #2</label> <select class="form-control input-sm questions" id="Q2" name="Q2">
      </select>
          
      <input type="text" name="question_2" id="question_2" hidden>

      <input class="inputs form-control top-buffer-10 input-sm" id="answer2" name="answer2" placeholder="Enter answer to question #2" type="text">
     
    </div>
    
    <div class="form-group">
      <label class="control-label" for="Q3">Question #3</label> <select class="form-control input-sm questions" id="Q3" name="Q3">
    </select>
   
    <input type="text" name="question_3" id="question_3" hidden>

    <input class="inputs form-control top-buffer-10 input-sm" id="answer3" name="answer3" placeholder="Enter answer to question #3" type="text">
   
  </div>
  <div class="form-group">
    <label class="control-label" for="Q4">Question #4</label> <select class="form-control input-sm questions" id="Q4" name="Q4">
  </select>
 
  <input type="text" name="question_4" id="question_4" hidden>

  <input class="inputs form-control top-buffer-10 input-sm" id="answer4" name="answer4" placeholder="Enter answer to question #4" type="text">
  
</div>
<div class="form-group">
  <label class="control-label" for="Q5">Question #5</label> <select class="form-control input-sm questions" id="Q5" name="Q5">
</select>
  

<input type="text" name="question_5" id="question_5" hidden>
<input class="inputs form-control top-buffer-10 input-sm" id="answer5" name="answer5" placeholder="Enter answer to question #5" type="text">

</div>
<div class="form-group text-center">

<div style="display: inline-block;" name="g-recaptcha-response" class="g-recaptcha" data-sitekey="6LckeSoUAAAAAPw1vf74evYYXumJTYdBLFCORqUu"></div>
<?php if (isset($_GET['captcha'])) {?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> The Recaptcha is required
</div>
<?php } ?>
</div>
<div class="text-center">
  <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-sm-12">
<button class="btn btn-primary pull-right" type="submit">Submit</button>
</div>
</div>
</form>
</div>