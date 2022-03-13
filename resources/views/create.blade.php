<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Issue | CRUD Project Management Tool</title>
</head>
<body>
<h1 class="display-1">Add Issue</h1>
<form action="{{ url('/issues') }}" method="POST">
   @csrf
    <div class="mb-3 form-floating">
        <input required type="text" id="subject" class="form-control" name="subject">
        <label for="subject">Subject</label>
    </div>

    <div class="mb-3 form-floating">
        <input required type="text" id="assignee" class="form-control" name="assignee">
        <label for="assignee">Assignee</label>
    </div>



    <div class="form-floating mb-3">
        <textarea required name="description" id="description" cols="30" rows="10"
                  class="form-control"></textarea>
        <label for="description">Description</label>
    </div>

    <div class="mb-3">
        <label for="status" id="status">Status:</label>
        <select required name="status" id="status" class="=form-select">
            <option value="" selected>Please choose the Status</option>
            <option value="open">open</option>
            <option value="in_progress">in_progress</option>
            <option value="resolved">resolved</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="priority" id="priority">Priority:</label>
        <select required name="priority" id="priority" class="=form-select">
            <option value="" selected>Please choose the Priority</option>
            <option value="low">low</option>
            <option value="normal">normal</option>
            <option value="high">high</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="start_date">
            start_date:
            <input name="start_date" required type="date" id="start_date">
        </label></div>

    <div class="mb-3">
        <label for="due_date">
            due_date:
            <input required name="due_date" type="date" id="due_date">
        </label></div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
