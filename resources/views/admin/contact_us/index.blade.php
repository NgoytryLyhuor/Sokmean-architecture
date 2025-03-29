@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Contact Us Page</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Contact Us Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-block-helper me-2"></i>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            <div class="row">

                {{-- Header --}}
                <div class="col-md-5 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center mb-4">Header</h4>

                            <form action="{{ route('contact-us-pages.update_header', $contact->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="title" class="col-sm-12 col-form-label">Title</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" name="title" id="title"
                                                value="{{ $contact->title }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="col-sm-12 col-form-label">Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $contact->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="file" name="image" id="banner">
                                            <input class="form-control" type="hidden" name="old_banner"
                                                value="{{ $contact->image }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="image" class="col-sm-2 col-form-label"></label>
                                        <img id="show_banner" class="card-img-top img-fluid my-no-shadow w-100"
                                            style="object-fit:cover;height:160px !important;"
                                            src="{{ asset('backend/assets/images/' . $contact->image) }}" alt="">
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="col-sm-12">
                                            <button type="submit" class="w-100 btn btn-primary waves-effect waves-light">
                                                Update <i class="ri-arrow-right-line align-middle ms-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Social Media --}}
                <div class="col-md-7 col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="text-center">Contact Details</h4>

                            <form action="{{ route('contact-us-pages.update_social', $contact->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <!-- Email and Phone -->
                                    <div class="col-md-12">
                                        <label for="email" class="col-sm-12 col-form-label">email</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" name="email" id="email"
                                                value="{{ $contact->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phone" class="col-sm-12 col-form-label">phone</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="text" name="phone" id="phone"
                                                value="{{ $contact->phone }}">
                                        </div>
                                    </div>

                                    <!-- Social Media Links -->
                                    <div class="col-12 mt-4">
                                        <h5 class="fw-semibold mb-3">Social Media</h5>
                                        <div id="social-links-container" class="bg-light p-3 rounded">
                                            @if ($contact->social && is_array($contact->social))
                                                @foreach ($contact->social as $index => $social)
                                                    <div class="social-link-row mb-3 p-2 bg-white rounded shadow-sm">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-md-5">
                                                                <select name="social[{{ $index }}][name]"
                                                                    class="form-select form-select-sm">
                                                                    <option value="Facebook"
                                                                        {{ ($social['name'] ?? '') === 'Facebook' ? 'selected' : '' }}>
                                                                        Facebook</option>
                                                                    <option value="Telegram"
                                                                        {{ ($social['name'] ?? '') === 'Telegram' ? 'selected' : '' }}>
                                                                        Telegram</option>
                                                                    <option value="Twitter"
                                                                        {{ ($social['name'] ?? '') === 'Twitter' ? 'selected' : '' }}>
                                                                        Twitter</option>
                                                                    <option value="LinkedIn"
                                                                        {{ ($social['name'] ?? '') === 'LinkedIn' ? 'selected' : '' }}>
                                                                        LinkedIn</option>
                                                                    <option value="Instagram"
                                                                        {{ ($social['name'] ?? '') === 'Instagram' ? 'selected' : '' }}>
                                                                        Instagram</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text"
                                                                    name="social[{{ $index }}][url]"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Link"
                                                                    value="{{ $social['url'] ?? '' }}">
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button type="button"
                                                                    class="btn btn-danger btn-sm remove-social-link w-100">
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="social-link-row p-2 bg-white rounded shadow-sm">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="col-md-5">
                                                            <select name="social[0][name]"
                                                                class="form-select form-select-sm">
                                                                <option value="Facebook">Facebook</option>
                                                                <option value="Telegram">Telegram</option>
                                                                <option value="Twitter">Twitter</option>
                                                                <option value="LinkedIn">LinkedIn</option>
                                                                <option value="Instagram">Instagram</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" name="social[0][url]"
                                                                class="form-control form-control-sm" placeholder="Link">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm remove-social-link w-100">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <button type="button" id="add-social-link"
                                            class="btn btn-outline-success btn-sm mt-2 w-100">
                                            <i class="ri-add-line me-1"></i>Add Platform
                                        </button>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light w-100">
                                            Update <i class="ri-arrow-right-line align-middle ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- Question & Answer --}}
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center mb-4">Question & Answer</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($QA as $index => $qa)
                                        <tr>
                                            <td class="text-center" style="width: 10px">{{ $index + 1 }}</td>
                                            <td>{{ $qa->question }}</td>
                                            <td>{{ $qa->answer }}</td>
                                            <td style="width: 100px">
                                                <button type="button"
                                                    class="btn btn-info waves-effect waves-light p-1 px-2"
                                                    data-bs-toggle="modal" data-bs-target="#editModal"
                                                    onclick="loadEditData({{ $qa->id }})">
                                                    Edit
                                                </button>
                                                <button type="button"
                                                    class="btn btn-danger waves-effect waves-light p-1 px-2"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    onclick="loadDeleteData({{ $qa->id }})">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-start mt-3">
                                <button type="button" class="btn btn-warning waves-effect waves-light p-1 px-3"
                                    id="toggle_project_path">
                                    Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>
                                </button>
                            </div>

                            <!-- Insert Area (Hidden by Default) -->
                            <div id="insert_area" style="display: none;" class="mt-3">
                                <form action="{{ route('question-answer.store') }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-5">
                                            <div class="form-floating">
                                                <input type="text" name="question" id="insert_question"
                                                    class="form-control" placeholder="Question" required>
                                                <label for="insert_question">Question</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-floating">
                                                <textarea name="answer" id="insert_answer" class="form-control" placeholder="Answer" rows="1" required></textarea>
                                                <label for="insert_answer">Answer</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary w-100">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Insert Question & Answer --}}
                <div class="col-xl-12" id="project_path" style="display: none;">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center mb-4">Insert Question & Answer</h4>

                            <form action="{{ route('question-answer.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="question_2"
                                        class="col-sm-12 col-form-label text-capitalize">Question</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="question" id="question_2" rows="2" placeholder="Enter your question"
                                            required>{{ old('question') }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="answer_2" class="col-sm-12 col-form-label text-capitalize">Answer</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" name="answer" id="answer_2" rows="2" placeholder="Enter your answer"
                                            required>{{ old('answer') }}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Insert <i class="ri-arrow-right-line align-middle ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Question & Answer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="update_question_answer" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="edit_id">

                            <div class="modal-body">
                                <div class="row mb-3">
                                    <label for="edit_question" class="col-sm-2 col-form-label">Question</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="question" id="edit_question" rows="2" required></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="edit_answer" class="col-sm-2 col-form-label">Answer</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="answer" id="edit_answer" rows="2" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade bs-example-modal-center" id="deleteModal" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Are you sure?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" id="deleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {

            $("#banner").change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#show_banner").attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });

            $("#project_path").hide();

            $("#toggle_project_path").click(function() {
                var isVisible = $("#project_path").is(":visible");
                $("#project_path").slideToggle(150);

                if (isVisible) {
                    $(this).html('Show Insert Area <i class="ri-eye-line align-middle ms-2"></i>');
                } else {
                    $(this).html('Hide Insert Area <i class="ri-eye-off-line align-middle ms-2"></i>');
                    $('html, body').animate({
                        scrollTop: $("#project_path").offset().top - 180
                    }, 150);
                }
            });

            $('#deleteBtn').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ route('question-answer.delete', ['id' => ':id']) }}".replace(':id', id),
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.message) {
                            location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while deleting the record.');
                    }
                });
            });

        });

        document.addEventListener('DOMContentLoaded', function() {

            // Add new social media link row
            document.getElementById('add-social-link').addEventListener('click', function() {
                const container = document.getElementById('social-links-container');
                const socialLinkRows = container.querySelectorAll('.social-link-row');
                const newIndex = socialLinkRows.length;

                const newRow = document.createElement('div');
                newRow.className = 'social-link-row mb-3 p-2 bg-white rounded shadow-sm';
                newRow.innerHTML = `
                    <div class="row g-2 align-items-center">
                        <div class="col-md-5">
                            <select name="social[${newIndex}][name]" class="form-select form-select-sm">
                                <option value="" selected>Select a option</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Telegram">Telegram</option>
                                <option value="Twitter">Twitter</option>
                                <option value="LinkedIn">LinkedIn</option>
                                <option value="Instagram">Instagram</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text"
                                name="social[${newIndex}][url]"
                                class="form-control form-control-sm"
                                placeholder="Link">
                        </div>
                        <div class="col-md-1">
                            <button type="button"
                                    class="btn btn-danger btn-sm remove-social-link w-100">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>
                    </div>
                `;

                container.appendChild(newRow);
                attachRemoveListeners();
            });

            // Function to attach event listeners to remove buttons
            function attachRemoveListeners() {
                document.querySelectorAll('.remove-social-link').forEach(button => {
                    const newButton = button.cloneNode(true);
                    button.parentNode.replaceChild(newButton, button);

                    newButton.addEventListener('click', function() {
                        this.closest('.social-link-row').remove();
                        reindexSocialItems();
                    });
                });
            }

            // Function to reindex social items after removal
            function reindexSocialItems() {
                const container = document.getElementById('social-links-container');
                const socialLinkRows = container.querySelectorAll('.social-link-row');

                socialLinkRows.forEach((row, index) => {
                    const select = row.querySelector('select[name^="social"][name$="[name]"]');
                    const urlInput = row.querySelector('input[name^="social"][name$="[url]"]');

                    if (select && urlInput) {
                        select.name = `social[${index}][name]`;
                        urlInput.name = `social[${index}][url]`;
                    }
                });
            }

            // Attach listeners on page load
            attachRemoveListeners();

        });

        function loadEditData(id) {
            $.ajax({
                url: "{{ route('question-answer.edit') }}", // Route to fetch data
                type: "GET",
                data: { id: id }, // Pass the ID to the backend
                success: function(response) {
                    console.log(response);

                    if (response.status === 'success') {
                        // Populate the form fields
                        $('#edit_id').val(response.data.id);
                        $('#edit_question').val(response.data.question);
                        $('#edit_answer').val(response.data.answer);

                        $('#update_question_answer').attr('action', "{{ route('question-answer.update', ['id' => ':id']) }}".replace(':id', id));
                    } else {
                        alert('Failed to load data.');
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while loading data.');
                }
            });
        }

        function loadDeleteData(id) {
            $('#deleteBtn').data('id', id);
        }

    </script>
@endsection
