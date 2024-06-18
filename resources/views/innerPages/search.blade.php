@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="row align-items-start justify-content-between">

            <div class="col-md-4 searchMain" id="hideDivCard">
                <h3><strong>ADVANCED SEARCH</strong></h3>
                <form action="">
                    <div class="inputSearch mb-2">
                        <p>Looking for</p>
                        <label for=""><input type="checkbox" name="" id=""> Bride</label>
                    </div>
                    <div class="inputSearchField forInputStyle d-flex justify-content-between mb-4">
                        <div class="inputMaingroup">
                            <label for="">AGE From</label>
                            <input type="number">
                        </div>
                        <div class="inputMaingroup">
                            <label for="">To</label>
                            <input type="number">
                        </div>
                    </div>

                    <div class="inputSearch forInputStyle mb-4">
                        <label for=""> Member ID</label>
                           <input type="text" name="" id="">
                    </div>

                    {{-- Marital STatus --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for=""> MARITAL STATUS</label>
                          <select name="" id="">
                            <option value="">Choose one</option>
                            <option value="">Never Married</option>
                            <option value="">Married</option>
                            <option value="">Divorced</option>
                            <option value="">Separated</option>
                            <option value="">Widowed</option>
                          </select>
                    </div>

                    {{-- Religion --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for="">RELIGION</label>
                          <select name="" id="">
                            <option value="">Choose one</option>
                            <option value="">Hindu</option>
                            <option value="">Buddist</option>
                            <option value="">Hindu Gen.</option>
                            <option value="">Hindu OBC</option>
                            <option value="">Hindu SC/ST</option>
                          </select>
                    </div>

                    {{-- CASTE --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for="">CASTE / SECT</label>
                          <select name="" id="">
                            <option value="">Choose a Religion First</option>
                            <option value="">Never Married</option>
                            <option value="">Married</option>
                            <option value="">Divorced</option>
                            <option value="">Separated</option>
                            <option value="">Widowed</option>
                          </select>
                    </div>

                    {{-- SUB CASTE --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for=""> SUB CASTE</label>
                          <select name="" id="">
                            <option value="">Choose a Caste First</option>
                            <option value="">Never Married</option>
                            <option value="">Married</option>
                            <option value="">Divorced</option>
                            <option value="">Separated</option>
                            <option value="">Widowed</option>
                          </select>
                    </div>

                    {{-- OCCUPATION --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for="">OCCUPATION</label>
                          <select name="" id="">
                            <option value="">Choose one</option>
                            <option value="">Government Service</option>
                            <option value="">Business</option>
                            <option value="">Doctor</option>
                            <option value="">Engineer</option>
                            <option value="">Nurse</option>
                          </select>
                    </div>

                    {{-- COUNTRY --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for="">COUNTRY</label>
                          <select name="" id="">
                            <option value="">Choose one</option>
                            <option value="">Bharat</option>
                            <option value="">Europe</option>
                            <option value="">New Zealand</option>
                            <option value="">Germany</option>
                          </select>
                    </div>

                    {{-- STATE --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for="">STATE</label>
                          <select name="" id="">
                            <option value="">Choose a Country First</option>
                            <option value="">Never Married</option>
                            <option value="">Married</option>
                            <option value="">Divorced</option>
                            <option value="">Separated</option>
                            <option value="">Widowed</option>
                          </select>
                    </div>

                    {{-- CITY --}}
                    <div class="inputSearch forInputStyle mb-4">
                        <label for="">CITY</label>
                          <select name="" id="">
                            <option value="">Choose a State First</option>
                            <option value="">Never Married</option>
                            <option value="">Married</option>
                            <option value="">Divorced</option>
                            <option value="">Separated</option>
                            <option value="">Widowed</option>
                          </select>
                    </div>
                    <div class="inputSearchField forInputStyle d-flex justify-content-between mb-4">
                        <div class="inputMaingroup">
                            <label for="">Min Height (Feet)</label>
                            <input type="number">
                        </div>
                        <div class="inputMaingroup">
                            <label for="">Max Height (Feet)</label>
                            <input type="number">
                        </div>
                    </div>
                    <h3><strong>MEMBER TYPE</strong></h3>
                    <div class="mb-3">
                        <input type="radio" id="all" name="option" value="all">
                        <label for="all">All Members</label>
                    </div>
                    <div class="mb-3">
                        <input type="radio" id="verify" name="option" value="verify">
                        <label for="verify">Verify Members</label>
                    </div>
                    <div class="mb-3">
                        <input type="radio" id="free" name="option" value="free">
                        <label for="free">Free Members</label>
                    </div>

                    <input class="searchIt" type="submit" value="Search">

                </form>

            </div>
            <div class="col-md-8" id="dashboard_listing" wire:ignore="">


                <div class="activeMember">
                    <div class="d-flex justify-content-between">
                        <img src="http://127.0.0.1:8000/images/ritu.jpeg" alt="">
                        <div class="activeinfo">
                            <h2>Reetu Kushwaha</h2>
                            <p class="memberDescription">...</p>
                            <p class="occupation">PVT JOB</p>
                            <h4>Member Id: <span class="green">42A093EF6089</span></h4>
                            <div class="d-flex">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Age</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>Religion</td>
                                            <td>Hindu</td>
                                        </tr>
                                        <tr>
                                            <td>Highest Education</td>
                                            <td>12th</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>Delhi , Bharat</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Height</td>
                                            <td>5.01 Feet</td>
                                        </tr>
                                        <tr>
                                            <td>Caste / Sect</td>
                                            <td>kushwaha</td>
                                        </tr>
                                        <tr>
                                            <td>Marital Status</td>
                                            <td>Never Married</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <ul class="activeDetials">
                        <li>
                            <a href="#">Full Profile</a>
                        </li>
                        <li>
                            <a href="#">Contact Numbers</a>
                        </li>
                        <li>
                            <a href="#">Shortlist</a>
                        </li>


                        <li>
                            <a href="#">Profile Report</a>
                        </li>
                    </ul>
                </div>



                <div class="activeMember">
                    <div class="d-flex justify-content-between">
                        <img src="http://127.0.0.1:8000/images/sonal.jpeg" alt="">
                        <div class="activeinfo">
                            <h2>Sonal Sharma (PHool Mali)</h2>
                            <p class="memberDescription">SONAL SHARMA AAGE - 36 QUALIFICATION - MBA PROFESSION - WORKING
                                WITH A PRIVATE BANK HEIGHT 5'3" COMPLEXION - FAIR LOOKING FOR QUALIFIED EDUCATED WORKING
                                PROFESSIONAL</p>
                            <p class="occupation">PVT JOB</p>
                            <h4>Member Id: <span class="green">42A093EF6089</span></h4>
                            <div class="d-flex">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Age</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>Religion</td>
                                            <td>Hindu</td>
                                        </tr>
                                        <tr>
                                            <td>Highest Education</td>
                                            <td>12th</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>Delhi , Bharat</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Height</td>
                                            <td>5.01 Feet</td>
                                        </tr>
                                        <tr>
                                            <td>Caste / Sect</td>
                                            <td>kushwaha</td>
                                        </tr>
                                        <tr>
                                            <td>Marital Status</td>
                                            <td>Never Married</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <ul class="activeDetials">
                        <li>
                            <a href="#">Full Profile</a>
                        </li>
                        <li>
                            <a href="#">Contact Numbers</a>
                        </li>
                        <li>
                            <a href="#">Shortlist</a>
                        </li>


                        <li>
                            <a href="#">Profile Report</a>
                        </li>
                    </ul>
                </div>



                <div class="activeMember">
                    <div class="d-flex justify-content-between">
                        <img src="http://127.0.0.1:8000/images/ritu.jpeg" alt="">
                        <div class="activeinfo">
                            <h2>Reetu Kushwaha</h2>
                            <p class="memberDescription">...</p>
                            <p class="occupation">PVT JOB</p>
                            <h4>Member Id: <span class="green">42A093EF6089</span></h4>
                            <div class="d-flex">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Age</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>Religion</td>
                                            <td>Hindu</td>
                                        </tr>
                                        <tr>
                                            <td>Highest Education</td>
                                            <td>12th</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>Delhi , Bharat</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Height</td>
                                            <td>5.01 Feet</td>
                                        </tr>
                                        <tr>
                                            <td>Caste / Sect</td>
                                            <td>kushwaha</td>
                                        </tr>
                                        <tr>
                                            <td>Marital Status</td>
                                            <td>Never Married</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <ul class="activeDetials">
                        <li>
                            <a href="#">Full Profile</a>
                        </li>
                        <li>
                            <a href="#">Contact Numbers</a>
                        </li>
                        <li>
                            <a href="#">Shortlist</a>
                        </li>


                        <li>
                            <a href="#">Profile Report</a>
                        </li>
                    </ul>
                </div>



                <div class="activeMember">
                    <div class="d-flex justify-content-between">
                        <img src="http://127.0.0.1:8000/images/ritu.jpeg" alt="">
                        <div class="activeinfo">
                            <h2>Reetu Kushwaha</h2>
                            <p class="memberDescription">...</p>
                            <p class="occupation">PVT JOB</p>
                            <h4>Member Id: <span class="green">42A093EF6089</span></h4>
                            <div class="d-flex">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Age</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>Religion</td>
                                            <td>Hindu</td>
                                        </tr>
                                        <tr>
                                            <td>Highest Education</td>
                                            <td>12th</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>Delhi , Bharat</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Height</td>
                                            <td>5.01 Feet</td>
                                        </tr>
                                        <tr>
                                            <td>Caste / Sect</td>
                                            <td>kushwaha</td>
                                        </tr>
                                        <tr>
                                            <td>Marital Status</td>
                                            <td>Never Married</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <ul class="activeDetials">
                        <li>
                            <a href="#">Full Profile</a>
                        </li>
                        <li>
                            <a href="#">Contact Numbers</a>
                        </li>
                        <li>
                            <a href="#">Shortlist</a>
                        </li>


                        <li>
                            <a href="#">Profile Report</a>
                        </li>
                    </ul>
                </div>



                <div class="activeMember">
                    <div class="d-flex justify-content-between">
                        <img src="http://127.0.0.1:8000/images/ritu.jpeg" alt="">
                        <div class="activeinfo">
                            <h2>Reetu Kushwaha</h2>
                            <p class="memberDescription">...</p>
                            <p class="occupation">PVT JOB</p>
                            <h4>Member Id: <span class="green">42A093EF6089</span></h4>
                            <div class="d-flex">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Age</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>Religion</td>
                                            <td>Hindu</td>
                                        </tr>
                                        <tr>
                                            <td>Highest Education</td>
                                            <td>12th</td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td>Delhi , Bharat</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Height</td>
                                            <td>5.01 Feet</td>
                                        </tr>
                                        <tr>
                                            <td>Caste / Sect</td>
                                            <td>kushwaha</td>
                                        </tr>
                                        <tr>
                                            <td>Marital Status</td>
                                            <td>Never Married</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <ul class="activeDetials">
                        <li>
                            <a href="#">Full Profile</a>
                        </li>
                        <li>
                            <a href="#">Contact Numbers</a>
                        </li>
                        <li>
                            <a href="#">Shortlist</a>
                        </li>


                        <li>
                            <a href="#">Profile Report</a>
                        </li>
                    </ul>
                </div>


            </div>



        </div>
    </div>
@endsection
