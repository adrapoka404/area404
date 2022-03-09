<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cp0 = new Producto();
        $cp0->nombre = "Impresión BN";
        $cp0->slug = "impresion-bn";
        $cp0->descripcion = "Impresión blanco y negro en hoja normal";
        $cp0->precio = "1";
        $cp0->cantidad = "0";
        $cp0->minimo = "1";
        $cp0->patern_id = 0;
        $cp0->categoria_id = 42;
        $cp0->estatus = 1;
        $cp0->tienda_id = 1;
        $cp0->imagen = "imp_bn_hn.png";
        $cp0->save();

        $cp1 = new Producto();
        $cp1->nombre = "Impresion Color TH";
        $cp1->slug = "impresion-color-th";
        $cp1->descripcion = "Impresion color en papel normal con imagen en toda la hoja";
        $cp1->precio = "12";
        $cp1->cantidad = "0";
        $cp1->minimo = "1";
        $cp1->patern_id = 0;
        $cp1->categoria_id = 42;
        $cp1->estatus = 1;
        $cp1->tienda_id = 1;
        $cp1->imagen = "imp_color_th.png";
        $cp1->save();

        $cp2 = new Producto();
        $cp2->nombre = "Impresion BN Imagen";
        $cp2->slug = "impresion-bn-imagen";
        $cp2->descripcion = "Impresion blanco y negro en papel normal con imagen";
        $cp2->precio = "5";
        $cp2->cantidad = "0";
        $cp2->minimo = "1";
        $cp2->patern_id = 0;
        $cp2->categoria_id = 42;
        $cp2->estatus = 1;
        $cp2->tienda_id = 1;
        $cp2->imagen = "imp_bn_th.png";
        $cp2->save();

        $cp3 = new Producto();
        $cp3->nombre = "Impresion BN Imagen PO";
        $cp3->slug = "impresion-bn-imagen-po";
        $cp3->descripcion = "Impresion blanco y negro en papel opalina con imagen";
        $cp3->precio = "12";
        $cp3->cantidad = "0";
        $cp3->minimo = "1";
        $cp3->patern_id = 0;
        $cp3->categoria_id = 42;
        $cp3->estatus = 1;
        $cp3->tienda_id = 1;
        $cp3->imagen = "imp_bn_po.png";
        $cp3->save();

        $cp4 = new Producto();
        $cp4->nombre = "Impresión BN Imagen PF";
        $cp4->slug = "impresion-bn-imagen-pf";
        $cp4->descripcion = "Impresión blanco y negro en papel fotográfico con imagen";
        $cp4->precio = "20";
        $cp4->cantidad = "0";
        $cp4->minimo = "0";
        $cp4->patern_id = 0;
        $cp4->categoria_id = 42;
        $cp4->estatus = 1;
        $cp4->tienda_id = 1;
        $cp4->imagen = "imp_bn_pf.png";
        $cp4->save();

        $cp5 = new Producto();
        $cp5->nombre = "Impresion Color";
        $cp5->slug = "impresion-color";
        $cp5->descripcion = "Impresion solo texto a color papel normal";
        $cp5->precio = "2";
        $cp5->cantidad = "0";
        $cp5->minimo = "0";
        $cp5->patern_id = 0;
        $cp5->categoria_id = 42;
        $cp5->estatus = 1;
        $cp5->tienda_id = 1;
        $cp5->imagen = "imp_color_hn.png";
        $cp5->save();

        $cp6 = new Producto();
        $cp6->nombre = "Impresion Color PO";
        $cp6->slug = "impresion-color-po";
        $cp6->descripcion = "Impresion solo texto a color en papel opalina";
        $cp6->precio = "5";
        $cp6->cantidad = "0";
        $cp6->minimo = "0";
        $cp6->patern_id = 0;
        $cp6->categoria_id = 42;
        $cp6->estatus = 1;
        $cp6->tienda_id = 1;
        $cp6->imagen = "imp_color_po.png";
        $cp6->save();

        $cp7 = new Producto();
        $cp7->nombre = "Impresión Color Imagen";
        $cp7->slug = "impresion-color-imagen";
        $cp7->descripcion = "Impresion color con imagen en papel normal";
        $cp7->precio = "5";
        $cp7->cantidad = "0";
        $cp7->minimo = "0";
        $cp7->patern_id = 0;
        $cp7->categoria_id = 42;
        $cp7->estatus = 1;
        $cp7->tienda_id = 1;
        $cp7->imagen = "imp_color_img.png";
        $cp7->save();

        $cp8 = new Producto();
        $cp8->nombre = "Impresion BN Imagen TH";
        $cp8->slug = "impresion-bn-imagen-th";
        $cp8->descripcion = "Impresión blanco y negro en papel normal con imagen en toda la hoja";
        $cp8->precio = "12";
        $cp8->cantidad = "0";
        $cp8->minimo = "0";
        $cp8->patern_id = 0;
        $cp8->categoria_id = 42;
        $cp8->estatus = 1;
        $cp8->tienda_id = 1;
        $cp8->imagen = "imp_bn_th.png";
        $cp8->save();

      

        $cp10 = new Producto();
        $cp10->nombre = "Impresion BN Imagen TH PO";
        $cp10->slug = "impresion-bn-imagen-th-po";
        $cp10->descripcion = "Impresión blanco y negro en papel opalina con imagen en toda la hoja";
        $cp10->precio = "20";
        $cp10->cantidad = "0";
        $cp10->minimo = "0";
        $cp10->patern_id = 0;
        $cp10->categoria_id = 42;
        $cp10->estatus = 1;
        $cp10->tienda_id = 1;
        $cp10->imagen = "imp_bn_pf.png";
        $cp10->save();

        $cp11 = new Producto();
        $cp11->nombre = "Impresion Color Imagen PO";
        $cp11->slug = "impresion-color-imagen-po";
        $cp11->descripcion = "Impresion color en papel opalina con imagen";
        $cp11->precio = "10";
        $cp11->cantidad = "0";
        $cp11->minimo = "0";
        $cp11->patern_id = 0;
        $cp11->categoria_id = 42;
        $cp11->estatus = 1;
        $cp11->tienda_id = 1;
        $cp11->imagen = "imp_color_pf.png";
        $cp11->save();

        $cp12 = new Producto();
        $cp12->nombre = "Impresion Color PF";
        $cp12->slug = "impresion-color-pf";
        $cp12->descripcion = "Impresión color en papel fotográfico";
        $cp12->precio = "20";
        $cp12->cantidad = "0";
        $cp12->minimo = "0";
        $cp12->patern_id = 0;
        $cp12->categoria_id = 42;
        $cp12->estatus = 1;
        $cp12->tienda_id = 1;
        $cp12->imagen = "imp_color_pf.png";
        $cp12->save();

        $cp13 = new Producto();
        $cp13->nombre = "Hojas blancas";
        $cp13->slug = "hojas-blancas";
        $cp13->descripcion = "Hojas blancas de papel normal";
        $cp13->precio = "0.25";
        $cp13->cantidad = "0";
        $cp13->minimo = "0";
        $cp13->patern_id = 0;
        $cp13->categoria_id = 5;
        $cp13->estatus = 1;
        $cp13->tienda_id = 1;
        $cp13->imagen = "hojas_blancas.png";
        $cp13->save();

        $cp14 = new Producto();
        $cp14->nombre = "Mantenimiento preventivo";
        $cp14->slug = "mantenimiento-preventivo";
        $cp14->descripcion = "Mantenimiento preventivo a pc";
        $cp14->precio = "150";
        $cp14->cantidad = "0";
        $cp14->minimo = "0";
        $cp14->patern_id = 0;
        $cp14->categoria_id = 21;
        $cp14->estatus = 1;
        $cp14->tienda_id = 1;
        $cp14->imagen = "mantenimiento_preventivo.png";
        $cp14->save();

        $cp15 = new Producto();
        $cp15->nombre = "Copia BN";
        $cp15->slug = "copia-bn";
        $cp15->descripcion = "Copia blanco y negro";
        $cp15->precio = "1";
        $cp15->cantidad = "0";
        $cp15->minimo = "0";
        $cp15->patern_id = 0;
        $cp15->categoria_id = 42;
        $cp15->estatus = 1;
        $cp15->tienda_id = 1;
        $cp15->imagen = "copia_bn.png";
        $cp15->save();

        $cp16 = new Producto();
        $cp16->nombre = "Copia Color";
        $cp16->slug = "copia-color";
        $cp16->descripcion = "copias a color en papel normal";
        $cp16->precio = "2";
        $cp16->cantidad = "0";
        $cp16->minimo = "0";
        $cp16->patern_id = 0;
        $cp16->categoria_id = 42;
        $cp16->estatus = 1;
        $cp16->tienda_id = 1;
        $cp16->imagen = "copia_color.png";
        $cp16->save();

        $cp17 = new Producto();
        $cp17->nombre = "Escaneo";
        $cp17->slug = "escaneo";
        $cp17->descripcion = "Escaneo por hoja y guardado en usb, correo y/o bluetooth";
        $cp17->precio = "5";
        $cp17->cantidad = "0";
        $cp17->minimo = "0";
        $cp17->patern_id = 0;
        $cp17->categoria_id = 42;
        $cp17->estatus = 1;
        $cp17->tienda_id = 1;
        $cp17->imagen = "escaner.png";
        $cp17->save();

        $cp18 = new Producto();
        $cp18->nombre = "Investigacion 1";
        $cp18->slug = "investigacion-1";
        $cp18->descripcion = "Trabajo de investigación de 1- 3 hojas";
        $cp18->precio = "10";
        $cp18->cantidad = "0";
        $cp18->minimo = "0";
        $cp18->patern_id = 0;
        $cp18->categoria_id = 2;
        $cp18->estatus = 1;
        $cp18->tienda_id = 1;
        $cp18->imagen = "investigacion.png";
        $cp18->save();

        $cp19 = new Producto();
        $cp19->nombre = "Investigacion 2";
        $cp19->slug = "investigacion-2";
        $cp19->descripcion = "Trabajo de investigación de 4 - 8 hojas";
        $cp19->precio = "20";
        $cp19->cantidad = "0";
        $cp19->minimo = "0";
        $cp19->patern_id = 0;
        $cp19->categoria_id = 2;
        $cp19->estatus = 1;
        $cp19->tienda_id = 1;
        $cp19->imagen = "investigacion.png";
        $cp19->save();

        $cp20 = new Producto();
        $cp20->nombre = "Engargolado plastico 1";
        $cp20->slug = "engargolado-plastico-1";
        $cp20->descripcion = "Engargolado plástico de 1-30 hojas";
        $cp20->precio = "15";
        $cp20->cantidad = "0";
        $cp20->minimo = "0";
        $cp20->patern_id = 0;
        $cp20->categoria_id = 44;
        $cp20->estatus = 1;
        $cp20->tienda_id = 1;
        $cp20->imagen = "engargolado_plastico.png";
        $cp20->save();

        $cp21 = new Producto();
        $cp21->nombre = "Engargolado plastico 2";
        $cp21->slug = "engargolado-plastico-2";
        $cp21->descripcion = "Engargolado plastico 2 de 30 a 50 hojas o algo asi";
        $cp21->precio = "20";
        $cp21->cantidad = "0";
        $cp21->minimo = "0";
        $cp21->patern_id = 0;
        $cp21->categoria_id = 44;
        $cp21->estatus = 1;
        $cp21->tienda_id = 1;
        $cp21->imagen = "engargolado_plastico.png";
        $cp21->save();

        $cp22 = new Producto();
        $cp22->nombre = "Engargolado plastico 3";
        $cp22->slug = "engargolado-plastico-3";
        $cp22->descripcion = "Engargolado plastico de mas de 150 hojas";
        $cp22->precio = "25";
        $cp22->cantidad = "0";
        $cp22->minimo = "0";
        $cp22->patern_id = 0;
        $cp22->categoria_id = 44;
        $cp22->estatus = 1;
        $cp22->tienda_id = 1;
        $cp22->imagen = "engargolado_plastico.png";
        $cp22->save();

        $cp23 = new Producto();
        $cp23->nombre = "Engargolado metalico";
        $cp23->slug = "engargolado-metalico";
        $cp23->descripcion = "Engargolado metalico de 1 a 30 hojas";
        $cp23->precio = "20";
        $cp23->cantidad = "0";
        $cp23->minimo = "0";
        $cp23->patern_id = 0;
        $cp23->categoria_id = 44;
        $cp23->estatus = 1;
        $cp23->tienda_id = 1;
        $cp23->imagen = "engargolado_metalico.png";
        $cp23->save();

        $cp24 = new Producto();
        $cp24->nombre = "Engargolado metalico";
        $cp24->slug = "engargolado-metalico";
        $cp24->descripcion = "Engargolado metalico de 30 a 100 hojas";
        $cp24->precio = "25";
        $cp24->cantidad = "0";
        $cp24->minimo = "0";
        $cp24->patern_id = 0;
        $cp24->categoria_id = 44;
        $cp24->estatus = 1;
        $cp24->tienda_id = 1;
        $cp24->imagen = "engargolado_metalico.png";
        $cp24->save();

        $cp25 = new Producto();
        $cp25->nombre = "Engargolado metalico 3";
        $cp25->slug = "engargolado-metalico-3";
        $cp25->descripcion = "Engargolado metalico de mas de 150 hojas";
        $cp25->precio = "30";
        $cp25->cantidad = "0";
        $cp25->minimo = "0";
        $cp25->patern_id = 0;
        $cp25->categoria_id = 44;
        $cp25->estatus = 1;
        $cp25->tienda_id = 1;
        $cp25->imagen = "engargolado_metalico.png";
        $cp25->save();

        $cp26 = new Producto();
        $cp26->nombre = "Folder T. Carta";
        $cp26->slug = "folder-t.-carta";
        $cp26->descripcion = "Folder beige tamaño carta papale reciclado";
        $cp26->precio = "5";
        $cp26->cantidad = "0";
        $cp26->minimo = "0";
        $cp26->patern_id = 0;
        $cp26->categoria_id = 44;
        $cp26->estatus = 1;
        $cp26->tienda_id = 1;
        $cp26->imagen = "folder.png";
        $cp26->save();

        $cp26 = new Producto();
        $cp26->nombre = "Recarga";
        $cp26->slug = "recarga";
        $cp26->descripcion = "Producto par generalizar recargas se debe agregar la cantidad completa incluyendo la comision";
        $cp26->precio = "1";
        $cp26->cantidad = "0";
        $cp26->minimo = "0";
        $cp26->patern_id = 0;
        $cp26->categoria_id = 44;
        $cp26->estatus = 1;
        $cp26->tienda_id = 1;
        $cp26->imagen = "recarga.png";
        $cp26->save();
    }
}
