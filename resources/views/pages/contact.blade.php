@extends('main')

@section('title', '| Contact')

@section('content')
  <div class="row">
      <div class="col-md-6 offset-md-3">
          <h1 class="display-6 lead text-center">Contact Us</h1>
          <hr>
          <div class="container">
              <div class="card">
                  <div class="card-header">
                      Send a Message
                  </div>
                  <div class="card-block">
                      <form role="form">
                          <div class="form-group col-lg-10 offset-lg-1">
                              <label class="form-control-label" for="form-group-input">Name</label>
                              <input type="text" class="form-control" id="form-group-input" name="name">
                          </div>
                          <div class="form-group col-lg-10 offset-lg-1">
                              <label class="form-control-label" for="form-group-input">Email</label>
                              <input type="text" class="form-control" id="form-group-input" name="email">
                          </div>
                          <div class="form-group col-lg-10 offset-lg-1">
                              <label class="form-control-label" for="form-group-input">Message</label>
                              <textarea class="form-control" placeholder="Type your message here..." id="form-group-input" name="notes" rows="6"></textarea>
                              <br>
                              <input class="btn btn-success btn-lg btn-block" type="submit" value="Send Message">
                          </div>
                      </form>

                  </div>
              </div>
          </div>
          <hr>
      </div>
  </div>
@endsection