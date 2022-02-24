<?php

namespace Database\Seeders;

use App\Models\CategoriasProducto;
use Illuminate\Database\Seeder;

class PCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cp0 = new CategoriasProducto();
        $cp0->nombre = "Consumo";
        $cp0->slug = "consumo";
        $cp0->descripcion = "Aquellos bienes y servicios que el consumidor final adquiere para su uso personal";
        $cp0->patern_id = null;
        $cp0->estatus = 1;
        $cp0->save();

        $cp1 = new CategoriasProducto();
        $cp1->nombre = "Servicios";
        $cp1->slug = "servicios";
        $cp1->descripcion = "Son un tipo de categoría de coste. Sólo se pueden registrar mediante cantidades numéricas como, por ejemplo, horas o unidades.";
        $cp1->patern_id = null;
        $cp1->estatus = 1;
        $cp1->save();

        $cp2 = new CategoriasProducto();
        $cp2->nombre = "Alimentos";
        $cp2->slug = "alimentos";
        $cp2->descripcion = "Engloba todos los alimentos perecederos y no perecederos que no se encuentran en la lista de categorías.";
        $cp2->patern_id = null;
        $cp2->estatus = 1;
        $cp2->save();

        $cp3 = new CategoriasProducto();
        $cp3->nombre = "Ropa";
        $cp3->slug = "ropa";
        $cp3->descripcion = "Camisas, blusas, suéteres, pantalones, faldas, abrigos, trajes, medias, ropa interior, bufandas, cinturones, sombreros, uniformes.";
        $cp3->patern_id = 1;
        $cp3->estatus = 1;
        $cp3->save();

        $cp4 = new CategoriasProducto();
        $cp4->nombre = "Panaderia";
        $cp4->slug = "panaderia";
        $cp4->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp4->patern_id = 1;
        $cp4->estatus = 1;
        $cp4->save();

        $cp5 = new CategoriasProducto();
        $cp5->nombre = "Frutas y verduras";
        $cp5->slug = "frutas-y-verduras";
        $cp5->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp5->patern_id = 1;
        $cp5->estatus = 1;
        $cp5->save();

        $cp6 = new CategoriasProducto();
        $cp6->nombre = "Viveres";
        $cp6->slug = "viveres";
        $cp6->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp6->patern_id = 1;
        $cp6->estatus = 1;
        $cp6->save();

        $cp7 = new CategoriasProducto();
        $cp7->nombre = "Electrodomesticos";
        $cp7->slug = "electrodomesticos";
        $cp7->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp7->patern_id = 1;
        $cp7->estatus = 1;
        $cp7->save();

        $cp8 = new CategoriasProducto();
        $cp8->nombre = "Abarrotes";
        $cp8->slug = "abarrotes";
        $cp8->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp8->patern_id = 1;
        $cp8->estatus = 1;
        $cp8->save();

        $cp9 = new CategoriasProducto();
        $cp9->nombre = "Libros";
        $cp9->slug = "libros";
        $cp9->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp9->patern_id = 1;
        $cp9->estatus = 1;
        $cp9->save();

        $cp10 = new CategoriasProducto();
        $cp10->nombre = "Perfumeria";
        $cp10->slug = "perfumeria";
        $cp10->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp10->patern_id = 1;
        $cp10->estatus = 1;
        $cp10->save();

        $cp11 = new CategoriasProducto();
        $cp11->nombre = "Musica";
        $cp11->slug = "musica";
        $cp11->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp11->patern_id = 1;
        $cp11->estatus = 1;
        $cp11->save();

        $cp12 = new CategoriasProducto();
        $cp12->nombre = "Joyeria";
        $cp12->slug = "joyeria";
        $cp12->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp12->patern_id = 1;
        $cp12->estatus = 1;
        $cp12->save();

        $cp13 = new CategoriasProducto();
        $cp13->nombre = "Hogar";
        $cp13->slug = "hogar";
        $cp13->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp13->patern_id = 1;
        $cp13->estatus = 1;
        $cp13->save();

        $cp14 = new CategoriasProducto();
        $cp14->nombre = "Jugueteria";
        $cp14->slug = "jugueteria";
        $cp14->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp14->patern_id = 1;
        $cp14->estatus = 1;
        $cp14->save();

        $cp15 = new CategoriasProducto();
        $cp15->nombre = "Plantas";
        $cp15->slug = "plantas";
        $cp15->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp15->patern_id = null;
        $cp15->estatus = 1;
        $cp15->save();

        $cp16 = new CategoriasProducto();
        $cp16->nombre = "Productos de belleza";
        $cp16->slug = "productos-de-belleza";
        $cp16->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp16->patern_id = null;
        $cp16->estatus = 1;
        $cp16->save();

        $cp17 = new CategoriasProducto();
        $cp17->nombre = "Zapateria";
        $cp17->slug = "zapateria";
        $cp17->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp17->patern_id = 1;
        $cp17->estatus = 1;
        $cp17->save();

        $cp18 = new CategoriasProducto();
        $cp18->nombre = "Corte de cabello";
        $cp18->slug = "corte-de-cabello";
        $cp18->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp18->patern_id = 2;
        $cp18->estatus = 1;
        $cp18->save();

        $cp19 = new CategoriasProducto();
        $cp19->nombre = "Labores domesticas";
        $cp19->slug = "labores-domesticas";
        $cp19->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp19->patern_id = 2;
        $cp19->estatus = 1;
        $cp19->save();

        $cp20 = new CategoriasProducto();
        $cp20->nombre = "Reparacion y mantenimiento";
        $cp20->slug = "reparacion-y-mantenimiento";
        $cp20->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp20->patern_id = 2;
        $cp20->estatus = 1;
        $cp20->save();

        $cp21 = new CategoriasProducto();
        $cp21->nombre = "Plomeria";
        $cp21->slug = "plomeria";
        $cp21->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp21->patern_id = 21;
        $cp21->estatus = 1;
        $cp21->save();

        $cp22 = new CategoriasProducto();
        $cp22->nombre = "Carpinteria";
        $cp22->slug = "carpinteria";
        $cp22->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp22->patern_id = 21;
        $cp22->estatus = 1;
        $cp22->save();

        $cp23 = new CategoriasProducto();
        $cp23->nombre = "Diseño";
        $cp23->slug = "diseno";
        $cp23->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp23->patern_id = null;
        $cp23->estatus = 1;
        $cp23->save();

        $cp24 = new CategoriasProducto();
        $cp24->nombre = "Programacion";
        $cp24->slug = "programacion";
        $cp24->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp24->patern_id = 2;
        $cp24->estatus = 1;
        $cp24->save();

        $cp25 = new CategoriasProducto();
        $cp25->nombre = "Seleccion de personal";
        $cp25->slug = "seleccion-de-personal";
        $cp25->descripcion = "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...";
        $cp25->patern_id = 2;
        $cp25->estatus = 1;
        $cp25->save();

        $cp26 = new CategoriasProducto();
        $cp26->nombre = "Catering";
        $cp26->slug = "catering";
        $cp26->descripcion = "Servicio que provee de comida y bebida a fiestas, eventos y presentaciones en general.";
        $cp26->patern_id = 2;
        $cp26->estatus = 1;
        $cp26->save();

        $cp27 = new CategoriasProducto();
        $cp27->nombre = "DJ's";
        $cp27->slug = "djs";
        $cp27->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.";
        $cp27->patern_id = 2;
        $cp27->estatus = 1;
        $cp27->save();

        $cp28 = new CategoriasProducto();
        $cp28->nombre = "Asesoria";
        $cp28->slug = "asesoria";
        $cp28->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp28->patern_id = 2;
        $cp28->estatus = 1;
        $cp28->save();

        $cp29 = new CategoriasProducto();
        $cp29->nombre = "Mensajeria";
        $cp29->slug = "mensajeria";
        $cp29->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp29->patern_id = 2;
        $cp29->estatus = 1;
        $cp29->save();

        $cp30 = new CategoriasProducto();
        $cp30->nombre = "Telefonia";
        $cp30->slug = "telefonia";
        $cp30->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp30->patern_id = 2;
        $cp30->estatus = 1;
        $cp30->save();

        $cp31 = new CategoriasProducto();
        $cp31->nombre = "Aseguradora";
        $cp31->slug = "aseguradora";
        $cp31->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp31->patern_id = 2;
        $cp31->estatus = 1;
        $cp31->save();

        $cp32 = new CategoriasProducto();
        $cp32->nombre = "Gestoria";
        $cp32->slug = "gestoria";
        $cp32->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp32->patern_id = 2;
        $cp32->estatus = 1;
        $cp32->save();

        $cp33 = new CategoriasProducto();
        $cp33->nombre = "Telecomunicaciones";
        $cp33->slug = "telecomunicaciones";
        $cp33->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp33->patern_id = 2;
        $cp33->estatus = 1;
        $cp33->save();

        $cp34 = new CategoriasProducto();
        $cp34->nombre = "Electricidad";
        $cp34->slug = "electricidad";
        $cp34->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp34->patern_id = 1;
        $cp34->estatus = 1;
        $cp34->save();

        $cp35 = new CategoriasProducto();
        $cp35->nombre = "Funeraria";
        $cp35->slug = "funeraria";
        $cp35->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp35->patern_id = 1;
        $cp35->estatus = 1;
        $cp35->save();

        $cp36 = new CategoriasProducto();
        $cp36->nombre = "Hotel";
        $cp36->slug = "hotel";
        $cp36->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp36->patern_id = 2;
        $cp36->estatus = 1;
        $cp36->save();

        $cp37 = new CategoriasProducto();
        $cp37->nombre = "Agencia de publicidad";
        $cp37->slug = "agencia-de-publicidad";
        $cp37->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp37->patern_id = 2;
        $cp37->estatus = 1;
        $cp37->save();

        $cp38 = new CategoriasProducto();
        $cp38->nombre = "Cine";
        $cp38->slug = "cine";
        $cp38->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp38->patern_id = 2;
        $cp38->estatus = 1;
        $cp38->save();

        $cp39 = new CategoriasProducto();
        $cp39->nombre = "Discoteca";
        $cp39->slug = "discoteca";
        $cp39->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp39->patern_id = 2;
        $cp39->estatus = 1;
        $cp39->save();

        $cp40 = new CategoriasProducto();
        $cp40->nombre = "Restaurante";
        $cp40->slug = "restaurante";
        $cp40->descripcion = "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain";
        $cp40->patern_id = 2;
        $cp40->estatus = 1;
        $cp40->save();

        $cp41 = new CategoriasProducto();
        $cp41->nombre = "Impresion";
        $cp41->slug = "impresion";
        $cp41->descripcion = "Impresiones en diferentes tipos de papel y diferentes formas";
        $cp41->patern_id = 43;
        $cp41->estatus = 1;
        $cp41->save();

        $cp42 = new CategoriasProducto();
        $cp42->nombre = "Informatica";
        $cp42->slug = "informatica";
        $cp42->descripcion = "Categoría general para lo que engloba servicios y productos informáticos";
        $cp42->patern_id = null;
        $cp42->estatus = 1;
        $cp42->save();

        $cp43 = new CategoriasProducto();
        $cp43->nombre = "Papeleria";
        $cp43->slug = "papeleria";
        $cp43->descripcion = "Artículos relativos al papel así como todo tipo de complementos de oficina, como por ejemplo perforadoras, grapadoras, o útiles de dibujo";
        $cp43->patern_id = null;
        $cp43->estatus = 1;
        $cp43->save();
    }
}
