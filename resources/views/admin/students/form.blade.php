<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($student->name) ? $student->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="age" type="number" id="age" value="{{ isset($student->age) ? $student->age : ''}}" >
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    <label for="gender" class="control-label">{{ 'Gender' }}</label>
    <select name="gender" class="form-control" id="gender" >
        <option>Select Gender</option>
    @foreach ($genders as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($student->gender) && $student->gender == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('teacher') ? 'has-error' : ''}}">
    <label for="gender" class="control-label">{{ 'Teacher' }}</label>
    <select name="teacher" class="form-control" id="teacher" >
        <option>Select Teacher</option>
    @foreach ($teachers as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($student->teacher) && $student->teacher == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('teacher', '<p class="help-block">:message</p>') !!}
</div


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
