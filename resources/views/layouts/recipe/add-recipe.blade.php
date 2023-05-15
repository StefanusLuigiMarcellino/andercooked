<head>
    <link rel="stylesheet" href="css/layouts/recipe.css">
    {{-- <link rel="stylesheet" href="css/layouts/profile.css"> --}}
</head>

@extends('templates.2-row')

{{-- Mid Section --}}
@section('main-section')
    <form class="main-page" method="post" enctype="multipart/form-data">
        @csrf
        <div class="add-recipe-form" data-aos="zoom-in">
            <h3 class="form-title black margins">Add New Recipe</h3>
            <div class="form-detail">
                <div class="field">
                    <label class="label mb-3">Menu Name</label>
                    <div class="control">
                        <input class="input placeholder-font @error('menu_name') is-danger @enderror" name="menu_name" type="text" placeholder="e.g Stuffed Peppers" required autofocus value="{{ old('menu_name') }}">
                    </div>
                    @error('menu_name')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mt-5">
                    <label class="label mb-3">Description</label>
                    <div class="control">
                        <textarea class="textarea placeholder-font @error('description') is-danger @enderror" name="description" type="text" placeholder="Stuffed peppers hold a special place in our heart. From cheesesteak stuffed peppers to vegetarian stuffed peppers, this versatile veggie is one of our favorites to experiment with." required>{{ old('description') }}</textarea>
                    </div>
                    @error('description')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mt-5" id="file-img">
                    <label class="label">Upload Menu Picture</label>
                    <label class="file-label mb-3">
                        <input class="file-input @error('menu_pics') is-danger @enderror" type="file" name="menu_pics" required>
                        <span class="upload-wrapper">
                            {{-- <span class="upload-font">
                                <span class="green">Click to upload picture </span>or drag and drop
                            </span> --}}
                            <span class="detail-font">
                                {{-- JPG or PNG files up to 4Mb --}}
                                No file uploaded
                            </span>
                        </span>
                    </label>
                    @error('menu_pics')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mt-5">
                    <label class="label mb-3">Category</label>
                    <select name="category_id" id="category_id" class="select" style="border-radius: 10px; color: #C2C2C2; font-size: 14px; font-weight: 400;">
                        {{-- <option value="-1">Food or Drink</option> --}}
                        @foreach ($categories as $category)
                            @if(old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->category }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="field mt-5">
                    <label class="label mb-3">Cooking Ingredients</label>
                    <div class="control">
                        <textarea class="textarea placeholder-font @error('ingredients') is-danger @enderror" name="ingredients" style="max-height: 120px;" placeholder="1 tablespoon sugar
2 coconut powder
1 ice cube" required>{{ old('ingredients') }}</textarea>
                    </div>
                    @error('ingredients')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mt-5">
                    <label class="label mb-3">Cooking Directions</label>
                    <div class="control">
                        <textarea class="textarea placeholder-font  @error('cooking_steps') is-danger @enderror" name="cooking_steps" style="max-height: 120px;" placeholder="Step 1
Step 2
Step 3" required>{{ old('cooking_steps') }}</textarea>
                    </div>
                    @error('cooking_steps')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mt-5 mb-5">
                    <label class="label mb-3">Nutrients Facts</label>
                    <div class="nutrient-field mb-5">
                        <div class="detail">
                            <p>Calories</p>
                            <input class="input placeholder-font  @error('calories') is-danger @enderror" name="calories" type="text" placeholder="1289cal" required value="{{ old('calories') }}">
                            @error('calories')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="detail">
                            <p>Carbohydrates</p>
                            <input class="input placeholder-font @error('carbohydrates') is-danger @enderror" name="carbohydrates" type="text" placeholder="1289cal" required value="{{ old('carbohydrates') }}">
                            @error('carbohydrates')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="detail mt-3">
                            <p>Fats</p>
                            <input class="input placeholder-font  @error('fat') is-danger @enderror" name="fat" type="text" placeholder="1289cal" required value="{{ old('fat') }}">
                            @error('fat')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="detail mt-3">
                            <p>Protein</p>
                            <input class="input placeholder-font  @error('protein') is-danger @enderror" name="protein" type="text" placeholder="1289cal" required value="{{ old('protein') }}">
                            @error('protein')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <span class="line"></span>
                <div class="wrapper-button">
                    <button class="button-white del pointer" id="cancel-recipe">Cancel</button>
                    <button class="button-green pointer" id="add-recipe">Add Recipe</button>
                </div>
            </div>
        </div>

    </form>
@endsection

@section('script')
    <script>
        const fileInput = document.querySelector('#file-img input[type=file]');
        fileInput.onchange = () => {
        if (fileInput.files.length > 0) {
            const fileName = document.querySelector('#file-img .upload-wrapper');
            fileName.textContent = fileInput.files[0].name;
        }
        }
    </script>
@endsection

{{-- Right Section
@section('right-section')
    <section class="side-page" data-aos="fade-left">
        @include('templates.pie-chart')
    </section>
@endsection --}}
