
<?php if(isset($_SESSION['success'])): ?>
    <div class="alert-success">
        <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
    </div>
<?php endif ?>
<?php if(isset($_SESSION['error'])): ?>
    <div class="alert-error">
        <?php 
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        ?>
    </div>
<?php endif ?>
<?php if(isset($_SESSION['warning'])): ?>
    <div class="alert-warning">
        <?php 
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
        ?>
    </div>
<?php endif ?>