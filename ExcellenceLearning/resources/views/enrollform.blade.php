<div class="ui container">
    <div class="html ui top attached segment" style="margin:20px; margin-top:100px">
    <form class="ui form" action="enrollcheck" method="POST">
        {{ csrf_field() }}
        <div class="content ui inverted segment blue">
            <h3>Enroll in a course </h4>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label>Father First Name</label>
                    <input type="text" name="father-first-name" placeholder="Father First Name">
                </div>
                <div class="field">
                    <label>Father Last Name</label>
                    <input type="text" name="father-last-name" placeholder="Father Last Name">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label>Father Phone Number</label>
                    <input type="number" name="father-phone-number" placeholder="Father Phone Number">
                </div>
                <div class="field">
                    <label>Father Email </label>
                    <input type="email" name="father-email" placeholder="Father Email">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label>Mother First Name</label>
                    <input type="text" name="mother-first-name" placeholder="Mother First Name">
                </div>
                <div class="field">
                    <label>Mother Last Name</label>
                    <input type="text" name="mother-last-name" placeholder="Mother Last Name">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label>Mother Phone Number</label>
                    <input type="number" name="mother-phone-number" placeholder="Mother Phone Number">
                </div>
                <div class="field">
                    <label>Mother Email </label>
                    <input type="email" name="mother-email" placeholder="Mother Email">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label>Student First Name</label>
                    <input type="text" name="student-first-name" placeholder="Student First Name">
                </div>
                <div class="field">
                    <label>Student Last Name</label>
                    <input type="text" name="student-last-name" placeholder="Student Last Name">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="three fields">
                <div class="field">
                    <label>Student Birth Date</label>
                    <input type="Date" name="student-birth-date" placeholder="Student birth date">
                </div>
                <div class="field">
                    <label>Student Birth Place</label>
                    <input type="text" name="student-birth-place" placeholder="Student birth place">
                </div>
                <div class="field">
                    <label>Student student-gender</label>
                    <select name="student-gender" class="ui selection dropdown">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="three fields">
                <div class="field">
                    <label>Educational Institution</label>
                    <input type="text" name="edu_institution" placeholder="Educational Institution">
                </div>
                <div class="field">
                    <label>Town</label>
                    <input type="text" name="town" placeholder="Town">
                </div>
                <div class="field">
                    <label>Level of studies</label>
                    <input type="text" name="level" placeholder="Level of studies">
                </div>
            </div>
        </div>
        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label>Health state</label>
                    <input type="text" name="health-state" placeholder="Health state">
                </div>
                <div class="field">
                    <label>General Mark</label>
                    <input type="text" name="mark" placeholder="General Mark">
                </div>
                <div class="field">
                    <label>Course</label>
                    <select name="course">
                        @for ($i = 0; $i < count($formation); $i++)
                            <option value={{$formation[$i]->libFormation}}>{{$formation[$i]->libFormation}}</option>
                        @endfor
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="field">
            <div class="fields flex">
                <button type="submit" class="ui positive button large" value="enroll" name="enroll">
                    <i class="icon check"></i>
                    Enroll
                </button>
            </div>
        </div>
    </form>
    @if (is_numeric($id) && $id>0)
        <div class="ui success message">
            <i class="close icon"></i>
            <div class="header">
                Your user registration was successful.
            </div>
        </div>
    @endif
    </div>
</div>
<script>
    $('ui.selection.dropdown').dropdown();
</script>