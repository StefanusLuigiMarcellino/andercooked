<head>
    <link rel="stylesheet" href="css/layouts/recipe.css">
    {{-- <link rel="stylesheet" href="css/layouts/profile.css"> --}}
</head>

@extends('templates.2-row')

{{-- Mid Section --}}
@section('main-section')
    <section class="main-page">
        <div class="add-recipe-form" data-aos="zoom-in">
            <h3 class="form-title black margins">Add New Recipe</h3>
            <div class="form-detail">
                <div class="field">
                    <label class="label mb-3">Name</label>
                    <div class="control">
                        <input class="input placeholder-font" type="text" placeholder="e.g Alex Smith">
                    </div>
                </div>
                
                <div class="field mt-5">
                    <label class="label">Upload Photo</label>
                    <label class="file-label mb-3">
                        <input class="file-input" type="file" name="resume">
                        <span class="upload-wrapper">
                            <span class="upload-font">
                                <span class="green">Click to upload photo </span>or drag and drop
                            </span>
                            <span class="detail-font">
                                JPG or PNG files up to 5Mb
                            </span>
                        </span>
                    </label>
                </div>
        
                <div class="field mt-5">
                    <label class="label mb-3">Category</label>
                    <select name="bulan" id="bulan" class="input" style="border-radius: 10px; color: #C2C2C2; font-size: 14px; font-weight: 400;">
                        <option value="-1">Food or Drink</option>
                        <option value="01">Food</option>
                        <option value="02">Drink</option>
                    </select>
                </div>
        
                <div class="field mt-5">
                    <label class="label mb-3">Cooking Tools</label>
                    <div class="control">
                        <input class="input placeholder-font" type="text" placeholder="e.g Alex Smith">
                    </div>
                </div>
        
                <div class="field mt-5">
                    <label class="label mb-3">Cooking Directions</label>
                    <div class="control">
                        <textarea class="textarea placeholder-font" style="max-height: 120px;" placeholder="Step 1 
Step 2
Step 3"></textarea>
                    </div>
                </div>
        
                <div class="field mt-5 mb-5">
                    <label class="label mb-3">Nutrients Facts</label>
                    <div class="nutrient-field mb-5">
                        <div class="detail">
                            <p>Calories</p>
                            <input class="input placeholder-font" type="text" placeholder="1289cal">
                        </div>
                        <div class="detail">
                            <p>Carbohydrates</p>
                            <input class="input placeholder-font" type="text" placeholder="1289cal">
                        </div>
                        <div class="detail mt-3">
                            <p>Fats</p>
                            <input class="input placeholder-font" type="text" placeholder="1289cal">
                        </div>
                        <div class="detail mt-3">
                            <p>Protein</p>
                            <input class="input placeholder-font" type="text" placeholder="1289cal">
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
        
    </section>
@endsection

{{-- Right Section
@section('right-section')
    <section class="side-page" data-aos="fade-left">
        @include('templates.pie-chart')
    </section>
@endsection --}}