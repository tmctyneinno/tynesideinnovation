<div class="col-12">
    <div class="card">
        <div class="card-body">
           
            <form method="POST" action="{{ isset($policies) ? route('admin.privacy.update', $policies->id) : route('admin.privacy.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($policies))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="mb-3 col-md-10">
                        <label class="form-label">Privacy content</label>
                        <textarea class="ckeditor-classic" placeholder="" name="content" rows="8" spellcheck="false" required>{{ isset($policies) ? $policies->content : '' }}</textarea>
                    </div>
                   
                   
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($policies) ? 'Update' : 'Add' }}</button>
            </form>

        </div>
    </div>
</div>
<script src="{{ URL::asset('backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ URL::asset('backend/js/pages/form-editor.init.js') }}"></script>