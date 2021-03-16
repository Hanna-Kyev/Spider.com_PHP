<div class="col">
    <div class="card">
        <div class="card-header">
        <strong class="card-title"><span data-feather="file-text"></span><?=$title;?></strong> 
            <a href="/admin/categories" class="btn 
            btn-info text-right float-right"><span data-feather="arrow-left-circle"></span>Go back</a>
        </div>
        <div class="card-body">
            <form action="/admin/categories/store" method="POST">
                <div class="form-group">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control" id="name" name="name"
                    aria-describedby="nameHelp" require> 
                    <small id="nameHelp" class="form-text text-muted">Category name required.</small>
                </div>                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status"> 
                    <label class="form-check-label" for="status">Is Active?</label>
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>           
        </div>
    </div>
</div>

