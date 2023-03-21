 <div class="row">
        <div class="col-12">
          <div class="headings">
            <h1 class="headings">Teaching Assistant Vacancies</h1>
          </div>
        </div>
        <div class="subHeadings">
          <h5>Select from The Available Roles & Apply Today</h5>
        </div>
        @can('is-admin')
        <a class="btn btn-sm btn-success create" href="{{route('jobs.create')}}" role="button"> Create</a>
        @endcan

    </div>
    
    @include('layouts.jobsFilter')

    <div class="table-responsive">
    <table class="table">
            <thead>
              <tr>
                <th scope="col">Module</th>
                <th scope="col">Hiring Manager</th>
                <th scope="col">Job Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)

                <tr>
                
                    <td> {{$job->moduleCode}} </td>
                    <td> {{$job->hiringManager}} </td>
                    <td class="textDone"> {{$job->jobDescription}} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="/jobs/{{$job->id}}" role="button"> View </a>

                    </td>
                  </tr>

            </tbody>
            @endforeach
          </table>
</div>


    </div>
    <div  class="home-footer-padding"></div>
    @include('layouts.footer')



