<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom p-4">
        <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Ajouter experience</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
        <form action="{{route('admin.experience.store')}}" method="post">
            @csrf
            {{-- <div class="form-group mb-4">
                <label class="label">Company Logo</label>
                <input type="file" class="form-control text-dark file">
            </div> --}}
           
            {{-- <div class="form-group mb-4">
                <label class="label">Members</label>
                <input type="file" class="form-control text-dark file">
            </div> --}}
            <div class="form-group mb-4">
                <label class="label">Post</label>
                <input type="text" name="post" class="form-control text-dark" placeholder="developper web">
                @error('title')
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{$message}}
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            {{-- <div class="form-group mb-4">
                <label class="label">Status</label>
                <select class="form-select form-control text-dark" aria-label="Default select example">
                    <option selected>Ongoing</option>
                    <option value="1">Completed</option>
                    <option value="2">Close</option>
                    <option value="3">Cansel</option>
                </select>
            </div> --}}
            {{-- <div class="form-group mb-4">
                <label class="label">Completion</label>
                <input type="number" class="form-control text-dark" placeholder="50%">
            </div> --}}
            <div class="form-group mb-4">
                <label class="label">Entreprise</label>
                <input type="text" name="entreprise" class="form-control text-dark" placeholder="oneDev">
                @error('entreprise')
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{$message}}
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label class="label">Periode</label>
                <input type="text" name="periode" class="form-control text-dark" placeholder="developper web">
                @error('periode')
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{$message}}
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label class="label">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control text-dark"></textarea>
                @error('description')
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{$message}}
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @enderror
            </div>
            <div class="form-group d-flex gap-3">
                <button type="submit" class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line text-white"></i>
                        <span>Create Task</span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>