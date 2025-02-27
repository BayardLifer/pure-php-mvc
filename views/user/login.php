<div class="container">
    <h1 style="text-align: center"><?=$title?></h1>
    <?
    if( Message::has() ){
    ?>
        <div class="alert alert-<?= Message::getType() ?>">
            <?= Message::getText() ?>
        </div>
    <? 
    }
    ?> 
    <div class="row justify-content-center">
        <form method="POST" action="/user/login">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>