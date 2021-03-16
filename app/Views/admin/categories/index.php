
<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><span data-feather="file-text"></span><?=$title;?></strong> 
            <a href="/admin/categories/create" class="btn 
            btn-primary text-right float-right"><span data-feather="plus"></span>Add new</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (!empty($categories) && count($categories)>0):?>
                    <table class="table table-striped table-sm">

                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $category):?>
        
                            <tr>
                                <th scope="row"><?=$category->id;?></th>
                                <td><?=$category->name;?></td>
                                <td><?=$category->status;?></td>
                                <td>@todo</td>
                            </tr>
                        <?php endforeach;?>    
                        </tbody>
                    </table>
                <?php else: echo "No categories yet...";?>
                <?php endif;?>
            </div>   
        </div>
    </div>
</div>

    