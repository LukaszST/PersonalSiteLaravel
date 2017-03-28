<form action="/send" method="post">
    <div class="row form-group">
        <div class="col-xs-4">
            <input class="form-control" id="firstName" name="email" placeholder="First Name" required="" type="text">
        </div>
        <div class="col-xs-4">
            <input class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="" type="text">
            <input type="text" class="form-control url-post" id="url" name="url" style="display:none;">
        </div>
        <div class="col-xs-4">
            <input class="form-control" name="mil" placeholder="Email" required="" type="email">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-xs-12">
            <input type="text" name="title" id="title" class="form-control" required="" placeholder="Email title" required="required">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-xs-12">
            <textarea class="form-control" rows="5" id="comment"  name="content" placeholder="Content" required="required"></textarea>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-xs-12">
            <button class="btn btn-default pull-right">Contact Me</button>
        </div>
    </div>
</form>
