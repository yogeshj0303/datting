@extends('frontend.layout.main-after')
@section('main2.container')


    {{-- ===========================================
                    PAGE HEADER
    =========================================== --}}
    <section class="page-header-section style-1 breadcrumb-section">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Search</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">Search</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    SEARCH SECTION
    =========================================== --}}
    <section class="search-section container-fluid">
        <div class="container-fluid">
            <div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="search-filter">

                            <form action="#">
                                <div class="search-bar">
                                    <div class="input-group flex-fill">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text d-flow-root h-100 search-icon">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                          </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <div class="filter-btn">
                                        <button type="button" data-toggle="modal" data-target="#filter">
                                            <i class="fa-solid fa-filter"></i>
                                        </button>
                                    </div>

                                    {{--  Filter Modal  --}}
                                    <div class="modal" id="filter">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Filter</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="filter-bar">
                                                    <div class="location-filter">
                                                        <div class="filter-head">
                                                            Location
                                                        </div>
                                                        <div class="location-bar">
                                                            <div class="radio-group">
                                                                <input type="radio" name="location" value="delhi" id="delhi" checked>
                                                                <small>Delhi</small><label for="delhi"></label>
                                                            </div>
                                                            <div class="radio-group">
                                                                <input type="radio" name="location" value="other" id="other">
                                                                <small>Other Locations</small><label for="other"></label>
                                                            </div>
                                                            <div class="input-group location-input">
                                                                <input type="text" class="form-control" id="other-location" placeholder="City, Region & Country" name="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="distance-bar">
                                                        <div class="filter-head">
                                                            Distance(in miles)
                                                        </div>
                                                        <div class="range-bar">
                                                            <div class="mb-0"><small>Distance Range </small></div>
                                                            <div class="mb-1"><small>Display members that are located within</small></div>
                                                            <p class="mb-0 text-center"><span id="Dist"></span> km</p>
                                                            <input type="range" name="dist" min="0" max="2000" value="10" id="myDist">
                                                        </div>
                                                    </div>
                                                    <div class="basic-filter">
                                                        <div class="filter-head">
                                                            Basic Filters
                                                        </div>
                                                        <div class="basic-bar">
                                                            <div class="basic-item">
                                                                <div class="basic-name flex-fill">
                                                                    <small class="mb-0">ID Verified</small>
                                                                </div>
                                                                <div class="basic-icon">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="basic-item">
                                                                <div class="basic-name flex-fill">
                                                                    <small class="mb-0">Has Photos</small>
                                                                </div>
                                                                <div class="basic-icon">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="basic-item">
                                                                <div class="basic-name flex-fill">
                                                                    <small class="mb-0">Premium</small>
                                                                </div>
                                                                <div class="basic-icon">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="basic-item">
                                                                <div class="basic-name flex-fill">
                                                                    <small class="mb-0">Viewed Me</small>
                                                                </div>
                                                                <div class="basic-icon">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="basic-item">
                                                                <div class="basic-name flex-fill">
                                                                    <small class="mb-0">Favourited</small>
                                                                </div>
                                                                <div class="basic-icon">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="basic-item">
                                                                <div class="basic-name flex-fill">
                                                                    <small class="mb-0">Favourited Me</small>
                                                                </div>
                                                                <div class="basic-icon">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="double-range">
                                                                <div class="mb-0"><small>Age </small></div>
                                                                <div class="mb-1"><small>Display members that are between ages</small></div>
                                                                <div class="range-slider container">
                                                                    <div class="d-flex justify-content-evenly align-items-center">
                                                                        <small><span class="output mageOutput1"></span> yrs </small>
                                                                        <small><i class="fa-solid fa-arrows-left-right"></i></small>
                                                                        <small><span class="output mageOutput2"></span> yrs </small>
                                                                    </div>
                                                                    <span class="full-range"></span>
                                                                    <span class="mage-incl-range"></span>
                                                                    <input name="mageRange1" value="10" min="0" max="100" step="1" type="range" class="mAgeRange">
                                                                    <input name="mageRange2" value="90" min="0" max="100" step="1" type="range" class="mAgeRange">
                                                                </div>
                                                            </div>
                                                            <div class="double-range">
                                                                <div class="mb-0"><small>Height </small></div>
                                                                <div class="mb-1"><small>Display members that are between height</small></div>
                                                                <div class="range-slider container">
                                                                    <div class="d-flex justify-content-evenly align-items-center">
                                                                        <small><span class="output mheiOutput1"></span> cm </small>
                                                                        <small><i class="fa-solid fa-arrows-left-right"></i></small>
                                                                        <small><span class="output mheiOutput2"></span> cm </small>
                                                                    </div>
                                                                    <span class="full-range"></span>
                                                                    <span class="mhei-incl-range"></span>
                                                                    <input name="mheiRange1" value="10" min="0" max="100" step="1" type="range" class="mHeightRange">
                                                                    <input name="mheiRange2" value="90" min="0" max="100" step="1" type="range" class="mHeightRange">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="advance-filter">
                                                        <div class="filter-head">
                                                            Advanced Filter
                                                        </div>
                                                        <div class="advance-bar">
                                                            <div class="dropdown">
                                                                <button type="button" class="btn" data-toggle="dropdown">
                                                                  Body Type <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                                  <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                                    <ul>
                                                                        <li><input type="checkbox" name="body" value="Slim"> Slim</li>
                                                                        <li><input type="checkbox" name="body" value="Athletic">Athletic</li>
                                                                        <li><input type="checkbox" name="body" value="Average">Average</li>
                                                                        <li><input type="checkbox" name="body" value="Curvy">Curvy</li>
                                                                        <li><input type="checkbox" name="body" value="Overweight">Overweight</li>
                                                                    </ul>
                                                                  </label>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn" data-toggle="dropdown">
                                                                  Ethnicity <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                                  <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                                    <ul>
                                                                        <li><input type="checkbox" name="ethnicity" value="Asian"> Asian</li>
                                                                        <li><input type="checkbox" name="ethnicity" value="African">African</li>
                                                                        <li><input type="checkbox" name="ethnicity" value="East-Indian">East Indian</li>
                                                                        <li><input type="checkbox" name="ethnicity" value="Middle-Eastern">Middle Eastern</li>
                                                                        <li><input type="checkbox" name="ethnicity" value="Asian"> Asian</li>
                                                                        <li><input type="checkbox" name="ethnicity" value="African">African</li>
                                                                        <li><input type="checkbox" name="ethnicity" value="East-Indian">East Indian</li>
                                                                        <li><input type="checkbox" name="ethnicity" value="Middle-Eastern">Middle Eastern</li>
                                                                    </ul>
                                                                  </label>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn" data-toggle="dropdown">
                                                                  Education <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                                  <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                                    <ul>
                                                                        <li><input type="checkbox" name="education" value="High-School"> High School</li>
                                                                        <li><input type="checkbox" name="education" value="Intermediate">Intermediate</li>
                                                                        <li><input type="checkbox" name="education" value="Bachelor-Degree">Bachelor Degree</li>
                                                                        <li><input type="checkbox" name="education" value="Graduate-Degree">Graduate Degree</li>
                                                                        <li><input type="checkbox" name="education" value="PhD"> PhD</li>
                                                                        <li><input type="checkbox" name="education" value="African">African</li>
                                                                        <li><input type="checkbox" name="education" value="East Indian">East Indian</li>
                                                                        <li><input type="checkbox" name="education" value="Middle Eastern">Middle Eastern</li>
                                                                    </ul>
                                                                  </label>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn" data-toggle="dropdown">
                                                                    Relationship <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                                  <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                                    <ul>
                                                                        <li><input type="checkbox" name="body" value="Single"> Single</li>
                                                                        <li><input type="checkbox" name="body" value="Married">Married</li>
                                                                        <li><input type="checkbox" name="body" value="Open-Relationship">Open Relationship</li>
                                                                        <li><input type="checkbox" name="body" value="Divorced">Divorced</li>
                                                                        <li><input type="checkbox" name="body" value="Widowed">Widowed</li>
                                                                    </ul>
                                                                  </label>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn" data-toggle="dropdown">
                                                                    Children <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                                  <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                                    <ul>
                                                                        <li><input type="checkbox" name="body" value="Yes"> Yes</li>
                                                                        <li><input type="checkbox" name="body" value="No">No</li>
                                                                    </ul>
                                                                  </label>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn" data-toggle="dropdown">
                                                                    Smoke <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                                  <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                                    <ul>
                                                                        <li><input type="checkbox" name="body" value="Non-Smoker">Non Smoker</li>
                                                                        <li><input type="checkbox" name="body" value="Light-Smoker">Light Smoker</li>
                                                                        <li><input type="checkbox" name="body" value="Heavy-Smoker">Heavy Smoker</li>
                                                                    </ul>
                                                                  </label>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn" data-toggle="dropdown">
                                                                    Drink <i class="fa-solid fa-angle-down"></i>
                                                                </button>
                                                                  <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                                    <ul>
                                                                        <li><input type="checkbox" name="body" value="Non-Drinker"> Non Drinker</li>
                                                                        <li><input type="checkbox" name="body" value="Social-Drinker">Social Drinker</li>
                                                                        <li><input type="checkbox" name="body" value="Heavy-Drinker">Heavy Drinker</li>
                                                                    </ul>
                                                                  </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Apply</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <hr class="filter-hr">

                            {{--  Filter Desktop View  --}}
                            <div class="filter-bar">
                                <div class="location-filter">
                                    <div class="filter-head">
                                        Location
                                    </div>
                                    <div class="location-bar">
                                        <div class="radio-group">
                                            <input type="radio" name="location" value="delhi" id="delhi" checked>
                                            <small>Delhi</small><label for="delhi"></label>
                                        </div>
                                        <div class="radio-group">
                                            <input type="radio" name="location" value="other" id="other">
                                            <small>Other Locations</small><label for="other"></label>
                                        </div>
                                        <div class="input-group location-input">
                                            <input type="text" class="form-control" id="other-location" placeholder="City, Region & Country" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="distance-bar">
                                    <div class="filter-head">
                                        Distance(in miles)
                                    </div>
                                    <div class="range-bar">
                                        <div class="mb-0"><small>Distance Range </small></div>
                                        <div class="mb-1"><small>Display members that are located within</small></div>
                                        <p class="mb-0 text-center"><span id="Dist-l"></span> km</p>
                                        <input type="range" name="distance" min="0" max="2000" value="0" id="myDist-l">
                                    </div>
                                </div>
                                <div class="basic-filter">
                                    <div class="filter-head">
                                        Basic Filters
                                    </div>
                                    <div class="basic-bar">
                                        <div class="basic-item">
                                            <div class="basic-name flex-fill">
                                                <small class="mb-0">ID Verified</small>
                                            </div>
                                            <div class="basic-icon">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="basic-item">
                                            <div class="basic-name flex-fill">
                                                <small class="mb-0">Has Photos</small>
                                            </div>
                                            <div class="basic-icon">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="basic-item">
                                            <div class="basic-name flex-fill">
                                                <small class="mb-0">Premium</small>
                                            </div>
                                            <div class="basic-icon">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="basic-item">
                                            <div class="basic-name flex-fill">
                                                <small class="mb-0">Viewed Me</small>
                                            </div>
                                            <div class="basic-icon">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="basic-item">
                                            <div class="basic-name flex-fill">
                                                <small class="mb-0">Favourited</small>
                                            </div>
                                            <div class="basic-icon">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="basic-item">
                                            <div class="basic-name flex-fill">
                                                <small class="mb-0">Favourited Me</small>
                                            </div>
                                            <div class="basic-icon">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="double-range">
                                            <div class="mb-0"><small>Age </small></div>
                                            <div class="mb-1"><small>Display members that are between ages</small></div>

                                            <div class="range-slider container">
                                                <div class="d-flex justify-content-evenly align-items-center">
                                                    <small><span class="output ageOutput1"></span> yrs </small>
                                                    <small><i class="fa-solid fa-arrows-left-right"></i></small>
                                                    <small><span class="output ageOutput2"></span> yrs </small>
                                                </div>
                                                <span class="full-range"></span>
                                                <span class="age-incl-range"></span>
                                                <input name="ageRange1" value="20" min="18" max="50" step="1" type="range" class="AgeRange">
                                                <input name="ageRange2" value="40" min="18" max="50" step="1" type="range" class="AgeRange">
                                            </div>

                                        </div>
                                        <div class="double-range">
                                            <div class="mb-0"><small>Height </small></div>
                                            <div class="mb-1"><small>Display members that are between height</small></div>
                                            <div class="range-slider container">
                                                <div class="d-flex justify-content-evenly align-items-center">
                                                    <small><span class="output heiOutput1"></span> cm </small>
                                                    <small><i class="fa-solid fa-arrows-left-right"></i></small>
                                                    <small><span class="output heiOutput2"></span> cm </small>
                                                </div>
                                                <span class="full-range"></span>
                                                <span class="hei-incl-range"></span>
                                                <input name="heiRange1" value="10" min="0" max="100" step="1" type="range" class="HeightRange">
                                                <input name="heiRange2" value="90" min="0" max="100" step="1" type="range" class="HeightRange">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="advance-filter">
                                    <div class="filter-head">
                                        Advanced Filter
                                    </div>
                                    <div class="advance-bar">
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown">
                                              Body Type <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                              <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                <ul>
                                                    <li><input type="checkbox" name="body" value="Slim"> Slim</li>
                                                    <li><input type="checkbox" name="body" value="Athletic">Athletic</li>
                                                    <li><input type="checkbox" name="body" value="Average">Average</li>
                                                    <li><input type="checkbox" name="body" value="Curvy">Curvy</li>
                                                    <li><input type="checkbox" name="body" value="Overweight">Overweight</li>
                                                </ul>
                                              </label>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown">
                                              Ethnicity <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                              <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                <ul>
                                                    <li><input type="checkbox" name="ethnicity" value="Asian"> Asian</li>
                                                    <li><input type="checkbox" name="ethnicity" value="African">African</li>
                                                    <li><input type="checkbox" name="ethnicity" value="East-Indian">East Indian</li>
                                                    <li><input type="checkbox" name="ethnicity" value="Middle-Eastern">Middle Eastern</li>
                                                    <li><input type="checkbox" name="ethnicity" value="Asian"> Asian</li>
                                                    <li><input type="checkbox" name="ethnicity" value="African">African</li>
                                                    <li><input type="checkbox" name="ethnicity" value="East-Indian">East Indian</li>
                                                    <li><input type="checkbox" name="ethnicity" value="Middle-Eastern">Middle Eastern</li>
                                                </ul>
                                              </label>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown">
                                              Education <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                              <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                <ul>
                                                    <li><input type="checkbox" name="education" value="High-School"> High School</li>
                                                    <li><input type="checkbox" name="education" value="Intermediate">Intermediate</li>
                                                    <li><input type="checkbox" name="education" value="Bachelor-Degree">Bachelor Degree</li>
                                                    <li><input type="checkbox" name="education" value="Graduate-Degree">Graduate Degree</li>
                                                    <li><input type="checkbox" name="education" value="PhD"> PhD</li>
                                                    <li><input type="checkbox" name="education" value="African">African</li>
                                                    <li><input type="checkbox" name="education" value="East Indian">East Indian</li>
                                                    <li><input type="checkbox" name="education" value="Middle Eastern">Middle Eastern</li>
                                                </ul>
                                              </label>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown">
                                                Relationship <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                              <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                <ul>
                                                    <li><input type="checkbox" name="body" value="Single"> Single</li>
                                                    <li><input type="checkbox" name="body" value="Married">Married</li>
                                                    <li><input type="checkbox" name="body" value="Open-Relationship">Open Relationship</li>
                                                    <li><input type="checkbox" name="body" value="Divorced">Divorced</li>
                                                    <li><input type="checkbox" name="body" value="Widowed">Widowed</li>
                                                </ul>
                                              </label>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown">
                                                Children <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                              <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                <ul>
                                                    <li><input type="checkbox" name="body" value="Yes"> Yes</li>
                                                    <li><input type="checkbox" name="body" value="No">No</li>
                                                </ul>
                                              </label>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown">
                                                Smoke <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                              <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                <ul>
                                                    <li><input type="checkbox" name="body" value="Non-Smoker">Non Smoker</li>
                                                    <li><input type="checkbox" name="body" value="Light-Smoker">Light Smoker</li>
                                                    <li><input type="checkbox" name="body" value="Heavy-Smoker">Heavy Smoker</li>
                                                </ul>
                                              </label>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn" data-toggle="dropdown">
                                                Drink <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                              <label for="body"  class="dropdown-menu dropdown-menu-right">
                                                <ul>
                                                    <li><input type="checkbox" name="body" value="Non-Drinker"> Non Drinker</li>
                                                    <li><input type="checkbox" name="body" value="Social-Drinker">Social Drinker</li>
                                                    <li><input type="checkbox" name="body" value="Heavy-Drinker">Heavy Drinker</li>
                                                </ul>
                                              </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="apply-btn text-center mt-3">
                                    <button type="button" class="apply">Apply</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row search-tabs">
                            <div class="col-6 tab-btn">
                                <button id="people-btn">Person</button>
                            </div>
                            <div class="col-6 tab-btn">
                                <button id="event-btn">Events</button>
                            </div>
                        </div>

                        {{--  Person Grid  --}}
                        <div class="person-grid">
                            <div class="sort-bar">
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                      Sort By
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Nearest</a>
                                      <a class="dropdown-item" href="#">Recently Active</a>
                                      <a class="dropdown-item" href="#">Newest</a>
                                    </div>
                                  </div>
                            </div>
                            <div>
                                <div class="search-grid">
                             
                                    <div class="row profile-grid">
                                         @foreach($clients as $temp)
                                        <div class="col-lg-4 col-md-4 col-sm-6 profile-item">
                                            <a href="{{URL::to('other-profile')}}/{{$temp->id}}">
                                                <input type="hidden" name="view_user_id" value="{{$temp->id}}">
                                            <div class="profile-card">
                                                <div class="profile-img">
                                                    
                                                        <img src="{{ asset('uploads/image/'  . $temp->image) }}" alt="..." class="w-100 h-100">
                                                   
                                                    <span class="profile-badge">
                                                        <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..." data-bs-toggle="tooltip" title="Platinum Member">
                                                    </span>
                                                </div>
                                                </a>
                                                <div class="profile-detail">
                                                    <div class="profile-info">
                                                        <div class="name d-flex">
                                                            <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>
                                                            <div class="profile-name">
                                                                <h6 class="mb-0 text-truncate">{{$temp->username}}</h6>
                                                            </div>
                                                            <div class="tick">
                                                                <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>
                                                                <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">{{$temp->locate}}</p>
                                                        <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">
                                                            <small>
                                                                @if(!empty($temp->event->event_name))
                                                                <span class="event-name">{{$temp->event->event_name}} : </span>
                                                                <span class="event-time">{{$temp->event->event_date}}</span>
                                                           @endif
                                                            </small>
                                                        </button>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>
                                          @endforeach
                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 profile-item">-->
                                        <!--    <div class="profile-card">-->
                                        <!--        <div class="profile-img">-->
                                        <!--            <a href="other-profile">-->
                                        <!--                <img src="{{ asset('assets/images/profile/single/01.jpg') }}" alt="..." class="w-100 h-100">-->
                                        <!--            </a>-->
                                        <!--            <span class="profile-badge">-->
                                        <!--                {{--  <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">  --}}-->
                                        <!--            </span>-->
                                        <!--        </div>-->
                                        <!--        <div class="profile-detail">-->
                                        <!--            <div class="profile-info">-->
                                        <!--                <div class="name d-flex">-->
                                        <!--                    <div class="profile-name">-->
                                        <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="tick">-->
                                        <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                                        <!--                        {{--  <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>  --}}-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <p class="mb-0">Canada</p>-->
                                        <!--            </div>-->
                                        <!--            <div class="d-flex align-items-center">-->
                                        <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 profile-item">-->
                                        <!--    <div class="profile-card">-->
                                        <!--        <div class="profile-img">-->
                                        <!--            <a href="other-profile">-->
                                        <!--                <img src="{{ asset('assets/images/profile/single/05.jpg') }}" alt="..." class="w-100 h-100">-->
                                        <!--            </a>-->
                                        <!--            <span class="profile-badge">-->
                                        <!--                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">-->
                                        <!--            </span>-->
                                        <!--        </div>-->
                                        <!--        <div class="profile-detail">-->
                                        <!--            <div class="profile-info">-->
                                        <!--                <div class="name d-flex">-->
                                        <!--                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>-->
                                        <!--                    <div class="profile-name">-->
                                        <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="tick">-->
                                        <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                                        <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <p class="mb-0">Canada</p>-->
                                        <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                        <!--                    <small>-->
                                        <!--                        <span class="event-name">Dinner : </span>-->
                                        <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                                        <!--                    </small>-->
                                        <!--                </button>-->
                                        <!--            </div>-->
                                        <!--            <div class="d-flex align-items-center">-->
                                        <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 profile-item">-->
                                        <!--    <div class="profile-card">-->
                                        <!--        <div class="profile-img">-->
                                        <!--            <a href="other-profile">-->
                                        <!--                <img src="{{ asset('assets/images/profile/single/04.jpg') }}" alt="..." class="w-100 h-100">-->
                                        <!--            </a>-->
                                        <!--            <span class="profile-badge">-->
                                        <!--                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">-->
                                        <!--            </span>-->
                                        <!--        </div>-->
                                        <!--        <div class="profile-detail">-->
                                        <!--            <div class="profile-info">-->
                                        <!--                <div class="name d-flex">-->
                                        <!--                    <div class="profile-name">-->
                                        <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="tick">-->
                                        <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                                        <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <p class="mb-0">Canada</p>-->
                                        <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                        <!--                    <small>-->
                                        <!--                        <span class="event-name">Travel : </span>-->
                                        <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                                        <!--                    </small>-->
                                        <!--                </button>-->
                                        <!--            </div>-->
                                        <!--            <div class="d-flex align-items-center">-->
                                        <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 profile-item">-->
                                        <!--    <div class="profile-card">-->
                                        <!--        <div class="profile-img">-->
                                        <!--            <a href="other-profile">-->
                                        <!--                <img src="{{ asset('assets/images/profile/single/03.jpg') }}" alt="..." class="w-100 h-100">-->
                                        <!--            </a>-->
                                        <!--            <span class="profile-badge">-->
                                        <!--                {{--  <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">  --}}-->
                                        <!--            </span>-->
                                        <!--        </div>-->
                                        <!--        <div class="profile-detail">-->
                                        <!--            <div class="profile-info">-->
                                        <!--                <div class="name d-flex">-->
                                        <!--                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>-->
                                        <!--                    <div class="profile-name">-->
                                        <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="tick">-->
                                        <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                                        <!--                        {{--  <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>  --}}-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <p class="mb-0">Canada</p>-->
                                        <!--            </div>-->
                                        <!--            <div class="d-flex align-items-center">-->
                                        <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 profile-item">-->
                                        <!--    <div class="profile-card">-->
                                        <!--        <div class="profile-img">-->
                                        <!--            <a href="other-profile">-->
                                        <!--                <img src="{{ asset('assets/images/profile/single/02.jpg') }}" alt="..." class="w-100 h-100">-->
                                        <!--            </a>-->
                                        <!--            <span class="profile-badge">-->
                                        <!--                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">-->
                                        <!--            </span>-->
                                        <!--        </div>-->
                                        <!--        <div class="profile-detail">-->
                                        <!--            <div class="profile-info">-->
                                        <!--                <div class="name d-flex">-->
                                        <!--                    <div class="profile-name">-->
                                        <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="tick">-->
                                        <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                                        <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <p class="mb-0">Canada</p>-->
                                        <!--            </div>-->
                                        <!--            <div class="d-flex align-items-center">-->
                                        <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 profile-item">-->
                                        <!--    <div class="profile-card">-->
                                        <!--        <div class="profile-img">-->
                                        <!--            <a href="other-profile">-->
                                        <!--                <img src="{{ asset('assets/images/profile/single/05.jpg') }}" alt="..." class="w-100 h-100">-->
                                        <!--            </a>-->
                                        <!--            <span class="profile-badge">-->
                                        <!--                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">-->
                                        <!--            </span>-->
                                        <!--        </div>-->
                                        <!--        <div class="profile-detail">-->
                                        <!--            <div class="profile-info">-->
                                        <!--                <div class="name d-flex">-->
                                        <!--                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>-->
                                        <!--                    <div class="profile-name">-->
                                        <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="tick">-->
                                        <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                                        <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <p class="mb-0">Canada</p>-->
                                        <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                        <!--                    <small>-->
                                        <!--                        <span class="event-name">Travel : </span>-->
                                        <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                                        <!--                    </small>-->
                                        <!--                </button>-->
                                        <!--            </div>-->
                                        <!--            <div class="d-flex align-items-center">-->
                                        <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-4 col-md-4 col-sm-6 profile-item">-->
                                        <!--    <div class="profile-card">-->
                                        <!--        <div class="profile-img">-->
                                        <!--            <a href="other-profile">-->
                                        <!--                <img src="{{ asset('assets/images/profile/single/05.jpg') }}" alt="..." class="w-100 h-100">-->
                                        <!--            </a>-->
                                        <!--            <span class="profile-badge">-->
                                        <!--                <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">-->
                                        <!--            </span>-->
                                        <!--        </div>-->
                                        <!--        <div class="profile-detail">-->
                                        <!--            <div class="profile-info">-->
                                        <!--                <div class="name d-flex">-->
                                        <!--                    <div class="profile-name">-->
                                        <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="tick">-->
                                        <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                                        <!--                        {{--  <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>  --}}-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <p class="mb-0">Canada</p>-->
                                        <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                        <!--                    <small>-->
                                        <!--                        <span class="event-name">Clubbing : </span>-->
                                        <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                                        <!--                    </small>-->
                                        <!--                </button>-->
                                        <!--            </div>-->
                                        <!--            <div class="d-flex align-items-center">-->
                                        <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--  Event Grid  --}}
                        <div class="event-grid">
                            <div class="sort-bar">
                                <div class="dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                      Sort By
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Nearest</a>
                                      <a class="dropdown-item" href="#">Recently Active</a>
                                      <a class="dropdown-item" href="#">Newest</a>
                                    </div>
                                  </div>
                            </div>
                            <div>
                                <div class="search-grid">
                                    <div class="row">
                                        @foreach($user as $temp)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="event-item">
                                                <div class="event-card">

                                                    <div class="event-content" data-bs-toggle="modal" data-bs-target="#event-popup">
                                                        <div class="event-img">
                                                            <a>
                                                                <img src="assets/images/group/02.jpg" alt="img" class="w-100 h-100">
                                                            </a>
                                                        </div>
                                                        <div class="event-details">
                                                            <div class="event-name">
                                                                <p class="text-truncate event-name w-100">
                                                                    {{$temp->event_name}}
                                                                </p>
                                                            </div>
                                                            <div class="event-desc">
                                                                <p>{{$temp->event_des}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="profile-detail">
                                                        <div class="profile-info">
                                                            <div class="name d-flex">
                                                                <div class="profile-name">
                                                                    <a href="other-profile"> <h6 class="mb-0 text-truncate">{{$temp->username}}</h6> </a>
                                                                </div>
                                                                <div class="tick">
                                                                    <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>
                                                                    <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0 text-truncate">{{$temp->locate}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         @endforeach
                                        <!--<div class="col-lg-6 col-md-6">-->
                                        <!--    <div class="event-item">-->
                                        <!--        <div class="event-card">-->

                                        <!--            <div class="event-content" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                        <!--                <div class="event-img">-->
                                        <!--                    <a>-->
                                        <!--                        <img src="assets/images/group/02.jpg" alt="img" class="w-100 h-100">-->
                                        <!--                    </a>-->
                                        <!--                </div>-->
                                        <!--                <div class="event-details">-->
                                        <!--                    <div class="event-name">-->
                                        <!--                        <p class="text-truncate event-name w-100">-->
                                        <!--                            A Single Rose-->
                                        <!--                        </p>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="event-desc">-->
                                        <!--                        <p>Who doesn't love cupcakes? if you also love them, then this...</p>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="profile-detail">-->
                                        <!--                <div class="profile-info">-->
                                        <!--                    <div class="name d-flex">-->
                                        <!--                        <div class="profile-name">-->
                                        <!--                            <a href="other-profile"> <h6 class="mb-0 text-truncate">Johnny Wilson</h6> </a>-->
                                        <!--                        </div>-->
                                        <!--                        <div class="tick">-->
                                        <!--                            <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                                        <!--                            <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                                        <!--                        </div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="mb-0 text-truncate">Canada</div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-6 col-md-6">-->
                                        <!--    <div class="event-item">-->
                                        <!--        <div class="event-card">-->

                                        <!--            <div class="event-content" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                        <!--                <div class="event-img">-->
                                        <!--                    <a>-->
                                        <!--                        <img src="assets/images/group/02.jpg" alt="img" class="w-100 h-100">-->
                                        <!--                    </a>-->
                                        <!--                </div>-->
                                        <!--                <div class="event-details">-->
                                        <!--                    <div class="event-name">-->
                                        <!--                        <p class="text-truncate event-name w-100">-->
                                        <!--                            A Single Rose-->
                                        <!--                        </p>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="event-desc">-->
                                        <!--                        <p>Who doesn't love cupcakes? if you also love them, then this...</p>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="profile-detail">-->
                                        <!--                <div class="profile-info">-->
                                        <!--                    <div class="name d-flex">-->
                                        <!--                        <div class="profile-name">-->
                                        <!--                            <a href="other-profile"> <h6 class="mb-0 text-truncate">Johnny Wilson</h6> </a>-->
                                        <!--                        </div>-->
                                        <!--                        <div class="tick">-->
                                        <!--                            <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                                        <!--                            <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                                        <!--                        </div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="mb-0 text-truncate">Canada</div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-lg-6 col-md-6">-->
                                        <!--    <div class="event-item">-->
                                        <!--        <div class="event-card">-->

                                        <!--            <div class="event-content" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                        <!--                <div class="event-img">-->
                                        <!--                    <a>-->
                                        <!--                        <img src="assets/images/group/02.jpg" alt="img" class="w-100 h-100">-->
                                        <!--                    </a>-->
                                        <!--                </div>-->
                                        <!--                <div class="event-details">-->
                                        <!--                    <div class="event-name">-->
                                        <!--                        <p class="text-truncate event-name w-100">-->
                                        <!--                            A Single Rose-->
                                        <!--                        </p>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="event-desc">-->
                                        <!--                        <p>Who doesn't love cupcakes? if you also love them, then this...</p>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--            <div class="profile-detail">-->
                                        <!--                <div class="profile-info">-->
                                        <!--                    <div class="name d-flex">-->
                                        <!--                        <div class="profile-name">-->
                                        <!--                            <a href="other-profile"> <h6 class="mb-0 text-truncate">Johnny Wilson</h6> </a>-->
                                        <!--                        </div>-->
                                        <!--                        <div class="tick">-->
                                        <!--                            <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                                        <!--                            <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                                        <!--                        </div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="mb-0 text-truncate">Canada</div>-->
                                        <!--                </div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    PAGINATION
    =========================================== --}}
    <div class="container-fluid pagination-container">
        <div class="container">
            <div class="pagination">
                <div class="previous">
                    <small>Previous</small>
                </div>
                <div class="page-numbers flex-fill text-center">
                    <ul class="d-flex justify-content-center align-items-center">
                        <li> <a href="#">1</a> </li>
                        <li> <a href="#">2</a> </li>
                        <li> <a href="#">3</a> </li>
                        <li> <a href="#">...</a> </li>
                    </ul>
                </div>
                <div class="next">
                    <small>Next</small>
                </div>
            </div>
        </div>
    </div>


@endsection
