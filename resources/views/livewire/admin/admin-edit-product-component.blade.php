<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Editarea produselor
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Toate produsele</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nume produs</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Nume produs" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Slug" class="form-control input-md" wire:model="slug"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descriere</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Descriere" wire:model="description"  ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Pret</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Pret" class="form-control input-md"  wire:model="regular_price"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Imagine</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file" wire:model="newimage"/>
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" with="120" />
                                    @else
                                        <img src="{{asset('assets/images/products')}}/{{$image}}" width="120" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Categorie</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id">
                                    <option value="">Selecteaza categorie</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
