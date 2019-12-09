<?php echo form_open('jurusan/update') ?>
     <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

    <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-6">
                <div class="mdc-card">
                  <h6 class="card-title"> <?php echo $judul ?></h6>
                  <div class="template-demo">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                          <input class="mdc-text-field__input" required value="<?php echo $edit['kode_jurusan'] ?>" name="kode_jurusan" id="text-field-hero-input">
                          <div class="mdc-line-ripple"></div>
                          <label for="text-field-hero-input" class="mdc-floating-label">Kode Jurusan</label>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" value="<?php echo $edit['nama_jurusan'] ?>" required name="nama_jurusan" id="text-field-hero-input">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Nama Jurusan</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <input type="submit" name="simpan" class="mdc-button mdc-button--raised filled-button--success" value="Simpan">
                                        
                       <input type="reset" name="batal" class="mdc-button mdc-button--raised filled-button--dark" value="Batal">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             </div>
            </div>
          </div>
        </main>
      

<?php echo form_close() ?>
