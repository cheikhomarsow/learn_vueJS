<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">

</head>
<body>

<div id="app">
<div>
    @include('projects.list')
</div>
<div class="control">
    <form method="post" action="{{ route('tmp-route-post') }}" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)" >
        {{ csrf_field() }}

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input class="input" type="text" name="name" v-model="form.name" placeholder="Name">
                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <input class="input" type="text" v-model="form.description" name="description" placeholder="Description">
                <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" :disabled="form.errors.any()" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@2.5.16/dist/vue.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>




