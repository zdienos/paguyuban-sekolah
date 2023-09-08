<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header border-bottom">
				<h4 class="card-title">Data Guru</h4>
			</div>
			<div class="card-datatable table-responsive">
				<table class="datatables-users table border-top" id="list-data">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>NIP/NIK</th>
							<th>JK</th>
							<th>Bidang Studi</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
				</table>
			</div>
			<!-- Offcanvas to add new user -->
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
				<div class="offcanvas-header">
					<h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
					<form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
						<div class="mb-3">
							<label class="form-label" for="add-user-fullname">Full Name</label>
							<input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
						</div>
						<div class="mb-3">
							<label class="form-label" for="add-user-email">Email</label>
							<input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail" />
						</div>
						<div class="mb-3">
							<label class="form-label" for="add-user-contact">Contact</label>
							<input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
						</div>
						<div class="mb-3">
							<label class="form-label" for="add-user-company">Company</label>
							<input type="text" id="add-user-company" class="form-control" placeholder="Web Developer" aria-label="jdoe1" name="companyName" />
						</div>
						<div class="mb-3">
							<label class="form-label" for="country">Country</label>
							<select id="country" class="select2 form-select">
								<option value="">Select</option>
								<option value="Australia">Australia</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Belarus">Belarus</option>
								<option value="Brazil">Brazil</option>
								<option value="Canada">Canada</option>
								<option value="China">China</option>
								<option value="France">France</option>
								<option value="Germany">Germany</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Japan">Japan</option>
								<option value="Korea">Korea, Republic of</option>
								<option value="Mexico">Mexico</option>
								<option value="Philippines">Philippines</option>
								<option value="Russia">Russian Federation</option>
								<option value="South Africa">South Africa</option>
								<option value="Thailand">Thailand</option>
								<option value="Turkey">Turkey</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
							</select>
						</div>
						<div class="mb-3">
							<label class="form-label" for="user-role">User Role</label>
							<select id="user-role" class="form-select">
								<option value="subscriber">Subscriber</option>
								<option value="editor">Editor</option>
								<option value="maintainer">Maintainer</option>
								<option value="author">Author</option>
								<option value="admin">Admin</option>
							</select>
						</div>
						<div class="mb-4">
							<label class="form-label" for="user-plan">Select Plan</label>
							<select id="user-plan" class="form-select">
								<option value="basic">Basic</option>
								<option value="enterprise">Enterprise</option>
								<option value="company">Company</option>
								<option value="team">Team</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
						<button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Modal Tambah -->
<div class="modal fade" id="modal-form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>
			<?= form_open('', 'role = "form" id = "form"') ?>
			<div class="modal-body">
				<input type="hidden" name="id" value="">
				<div class="form-group">
					<label class="control-label"> Nama Lengkap</label>
					<div><input type="text" required="" placeholder="Nama Lengkap" autocomplete="off" name="nama" class="form-control"></div>
				</div>
				<div class="form-group">
					<label class="control-label"> NIP/NIK</label>
					<div><input type="text" onkeypress="return Angka(this)" required="" placeholder="NIP/NIK" autocomplete="off" name="nip" class="form-control"></div>
				</div>
				<div class="form-group">
					<div class="ra">
						<label class="control-label">Jenis Kelamin</label><br>
						<input type="radio" class="minimal" name="gender" value="Pria"><span class="lbl"> Pria</span>
						<input type="radio" name="gender" class="minimal" value="Wanita"><span class="lbl"> Wanita</span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label"> Bidang Studi</label>
					<div><input type="text" required="" placeholder="Bidang Studi" autocomplete="off" name="bidang" class="form-control"></div>
				</div>
				<div class="form-group">
					<label class="control-label"> Alamat</label>
					<div><input type="text" required="" placeholder="Alamat" autocomplete="off" name="alamat" class="form-control"></div>
				</div>
				<div class="form-group">
					<label class="control-label"> Telepon</label>
					<div><input type="text" required="" placeholder="Telepon" autocomplete="off" name="telepon" class="form-control"></div>
				</div>
				<div class="form-group">
					<label class="control-label">Status</label>
					<select name="status" required="" data-placeholder="--Pilih--" class="form-control">
						<option value="">--Pilih--</option>
						<option value="Aktif">Aktif</option>
						<option value="Cuti">Cuti</option>
						<option value="Berhenti">Berhenti</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>

