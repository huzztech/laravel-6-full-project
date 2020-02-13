<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programs', function(Blueprint $table)
		{
			$table->integer('wid', true);
			$table->integer('seller_id')->nullable();
			$table->string('unit')->nullable();
			$table->string('code')->nullable();
			$table->string('customer')->nullable();
			$table->string('warp_count')->nullable();
			$table->string('warp_yarn_type')->nullable();
			$table->string('warp_yarn_blend')->nullable();
			$table->string('weft1_count')->nullable();
			$table->string('weft1_yarn_type')->nullable();
			$table->string('weft1_yarn_blend')->nullable();
			$table->string('weft2_count')->nullable();
			$table->string('weft2_yarn_type')->nullable();
			$table->string('weft2_yarn_blend')->nullable();
			$table->string('weft3_count')->nullable();
			$table->string('weft3_yarn_type')->nullable();
			$table->string('weft3_yarn_blend')->nullable();
			$table->string('weft4_count')->nullable();
			$table->string('weft4_yarn_type')->nullable();
			$table->string('weft4_yarn_blend')->nullable();
			$table->string('w_end')->nullable();
			$table->string('w_pick')->nullable();
			$table->string('w_width')->nullable();
			$table->string('w_fabric_type')->nullable();
			$table->string('w_selvedge')->nullable();
			$table->string('w_writing')->nullable();
			$table->string('w_writing_val')->nullable();
			$table->string('sub_code')->nullable();
			$table->string('construction')->nullable();
			$table->string('fabric_type')->nullable();
			$table->string('order_quantity')->nullable();
			$table->string('design_status')->default('Pending');
			$table->timestamp('design_status_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('design_status_img')->nullable();
			$table->text('dispatch_address', 65535)->nullable();
			$table->string('dispatch_quantity')->nullable();
			$table->string('stock_quantity')->default('0');
			$table->timestamp('sample_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('sample_word')->nullable()->default('Pending');
			$table->timestamp('dispatch_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('selvedge_color')->nullable();
			$table->string('delivered_quantity')->nullable();
			$table->string('looms')->nullable();
			$table->timestamp('closing_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('produced_quantity')->nullable();
			$table->integer('change_by')->nullable();
			$table->text('remarks', 65535)->nullable();
			$table->timestamp('set_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('status')->default('Pending');
			$table->string('thisonetoshow')->default('yes');
			$table->string('whichcolumnch')->default('new');
			$table->string('levelcode')->default('Master');
			$table->string('subcode_number')->default('0');
			$table->string('mastercode')->default('0');
			$table->string('style_id')->nullable();
			$table->timestamp('waiting_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('etm_code')->default('0');
			$table->string('stock_at_stm')->nullable()->default('0');
			$table->string('notes_for_us', 5000)->nullable();
			$table->string('warp_cont')->default('0');
			$table->string('weft1_cont')->default('0');
			$table->string('weft2_cont')->default('0');
			$table->string('weft3_cont')->default('0');
			$table->string('weft4_cont')->default('0');
			$table->integer('running_priority')->default(1);
			$table->timestamp('on_update')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('ent_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('programs');
	}

}
