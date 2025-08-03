<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . "/Harmonia/View/LayoutInterno.php";
?>
<!DOCTYPE html>
<html lang="es">

<?php PrintCssInterno(); ?>

    <?php BarraNavegacion("Felipe","Bolanos","felipe@mail.com",402420695); ?>
    <?php

$cursosDisponibles = [
    1 => [
        "nombre" => "Teoria del Canto",
        "imagen" => "https://akamai.sscdn.co/gcs/cifra-blog/es/wp-content/uploads/2023/03/259e579-hombre-cantando-microfono.webp",
        "horarios" => [
            "Lunes 8:00-10:00",
            "Miércoles 8:00-10:00"
        ]
    ],
    2 => [
        "nombre" => "Lectura de Partitura",
        "imagen" => "https://woodandfirestudio.com/wp-content/uploads/2023/06/Zeichenflaeche-1-1.jpg",
        "horarios" => [
            "Martes 10:00-12:00",
            "Jueves 10:00-12:00"
        ]
    ],
    3 => [
        "nombre" => "Canto Básico",
        "imagen" => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw8ODxAVDxAQDxAQFRAQGBYWEBAQFxEXGBYVGBUYHiggGBolGxUVIjEhJykrLi8uGR8zODMtNygtLisBCgoKDg0OGhAQGy4lHyUwLy8tLy8tLy0vNi0yNS0tLSstLy8tLS0tLy8tLS0tLy0tLS0tLS8tLS8tLS0tLS0tLf/AABEIAKkBKgMBEQACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAABAgADBQYHBAj/xABEEAACAQIEAwUEBgYIBwEAAAABAgADEQQFEiEGMUETIlFhcQcygZFCcqGxwfAUIzRSgtEVM1Nic7LC4UN0g6OztfEk/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAIDBAEFBv/EADERAQACAgEDAQUIAgIDAAAAAAABAgMRIQQSMUETUWFx8AUiMoGRobHRweEUMxVCUv/aAAwDAQACEQMRAD8A3UQDAMAiAYDCAYBEAwDAaAbQJaAYBtAloEtAIECWgC0AQJAVmA5wACCLg3HiOUAQJeArQFgS8BCYAgCAYEgGAwgOsBoHmEAwDAIgEQCIBgMIDAQDaAQIBAgG0A2gG0CWgG0CWgS0AEQJaB4M2rFKTMNiAfhcED7SJG06hOkblzviPihiNKMdCjy77HffyGw+J5bWqm+10UiGGpcUVlaz1ajC2nSpUMdt7M2yDfpblvfkUWmXJrDcV42o0aVICnUcsdHeZT3r/vXsR5+sn3whOOW1ZdixWpLUG2obi97fGTiVcxpeZ1wIAMBTAWAIBgGARAYQLFgNA8wgGBIBEAiAwgMBAYCAwEAgQCBAYCAbQDaAbQJaBLQDaBLQARARzYE3A8zyEDQ+Ma7qQ5J1KCote++52HmPzeZslp2146xrhzrMUquSRTcJ46T8/TpK4tCc1lj8dSVyruGV97oRZX3v7xttJ1t7kLV35ZCjimIRWILG6/3RpIJNvLb5ec466FwNnVC3Y3CsQb6mJu4Nid9he17eMupaPCnJWZ5bmrhtwby1SkCQFMBTAWARAMAiA6wLFgPA80CQJAIgOIBAgOBAYCAwEBgIBAgMBANoBtANoBtAFoBAgHTABEDzYqkGUg+HI8iZyfCVfKnC5Si2YjUx6tvYeA8JgvM2ejSIq9r5ZSYWZAdiOXTwnIpDs5JaJxbw3QQMwUBdN7eBkdad4lynMglEnQdW2kW5Kp5+u80U3PlmvqPDH4PG1aRDjcX5nlfz+6WaiVW5h1Pg7iOoffUtSe3eXdhZdybkbbHp/OSrb3lqbjcN8VgQCNwd/hLVAwAYCmAsCQDAIgOsCxYFkDywJAIgMBAYCA4EBwIDAQGAgMBAa0A2gG0A2gECAbQJaAIEgU4vEpSRqtRgiINTMeQE5MxEblPHjtktFaxuZabX9oGFqVBTw96gVgXYiw03+j8fHwmPqOp7Y5iYifr5vW6T7MnJM9t6zMR4id/rPj92DzD2y0UqMKNEsqkgNz1AHn0tI+zzTzERHzn/AEd/RU4te0z8IjX6zPLPZZ7Qy6UqtWgVpVLd5b6lBW97bg8xte9jM3/ItW0xePHHD0f/ABdMuOLYrczG4idePy8F4yzNKy9nTYOtWmGVl3BU3H3i0vi0W5h5WTHbHPbaNS5ZmWVlbvzX87yyss9qsCwqEbKdJG3TV1l+lPLJ8N5rWoV6BZrKjbAkBSCTfVvyN7XndRvcETPiXfcI6sikdVU28ARLVErTAUwFMAGAsAiAYDrAtWBZA8sAwCIDgQHAgOBAcCAwEBgIDAQDaAQIDWgS0A2gG0CWgS0BSIGie1rMjSwi4dQS1djewudCWv8AaVkLTG4ifn+jVgi0Uvesbn8Ma+O9/tEx+bVqXBi4TKamJ7Q1cXWpo9lNloa17gNt25keFzy2BmDPkrNotPiJj+fL1ugpelbYa8WmJ/OdTER+X8udYLh3EO6ipTNNOZJ8BzA8T4S+/WY4j7k7lkw/ZOebROWvbX1mfd/fudo4QyfEFKjOgNKrsKTju6ALKCPGwEzUpEV02dR1M2yzes693whjM7wL4CoWCFaTG2l91F/BvxO/rM81tituvh6EZ8PWU7M3FvSfr+PHyYnG1UrJZdiouQen85sx3raNw8bqumyYLdt/1a1WQAb7ANcX5g2O/pL2JjqKKaoB32HLwueY+H2CS9ENcu+8PUdOFo97WTTW7/vnSBeXV8KbeXvYTqJIEMBTAWARAkBlgWpAsgeYQGEBgIDqIFgEBwIDgQGAgMBAYCAbQDaAQIBtAloBtAFoCtUUcz/tIWyVrOplZXFe0biGOzPOaVHugipUtcIp8erH6InZtCMUmWsrn+Hr1kp42lRqnUVQqpbsy1rBla43IAv4223ldu234oacWTNjiYxWmN+dTplsnp4PGYY9mwq6g6llsCFY3KW6C4G3kJjtXu3tt3amjJwhQVgwJ9Jz2cHt5nhmgVpIANgNpLeoV67pYzMqIxK9mwDBtiDuCJHe5T4iGBXhHBmropU6rFU77U6ihQSSACCCeh8tvLaFax3brDRbqLzi9neY16b8/q5rxlgf0bE1aGosFCMpa2so63ANttQ3G3ObKTuHm5Y7baYPh7LaterVKJr0L2jW5aVIJH2W+Mt9FEeX0Fl+GFKkiDkBf4nc/C5MthVM7lcwhwhEAGADAWBIBgEQLUgWQPOIDAQHUQLFECwCA4ECwCAwEBgIDAQDaBLQJaAbQJaAHawvI2tFY3KVKzadQ84qFrgEXHNVO8zWy3nw2VwUjy82NICMxZadgbVXsAjeDSmY9ZaKuIpxM+Kd6epRiBVbtHom1GvTDadVMdGtp9RczRqazHun9p+v0/PjHNu/fvhsuS0Hdkp4VGLXF2G1vEs/znbRNo1DtbRWYmWf4Z4ZpUHWur1qdS5ZgKj9k7H3u4Tp3N+kz2vPiW2OzXEfu3kVhaInhV28sVmeLA9JCyyOHjwWMpsG7VzTQgrqBINztsw90895z5k79HgzXibLsuomoH1uAyrTptqqOL7KfAc9z4ztK74gvfXNnLKeAxudY6rVVQNRDu5uKdJfdC36kAbDrvNWGN10p66sY8kR8IdX4Y4Zo4CmUXvMx7zkbnblboOc0RGmC1ts3OolMBDAUwFMAQJAkAiBasCyBSBAcCA6iBaogWAQHAgOBAYCA1oBAgG0CWgS0AwJaBiuJs0XB4Svin3FGm1TTe2tgO6t+l2IHxleSNxELcU9szL56zDH4mqGzZsSKNeoxCpQJRtF7EAqdgPA85KMcRGnLZbTO2ErZ5jatN6D4irUp1H1sjMWDN4m85GOsTvROW8xqZbh7NeFVq2x1WsaHZ4lKKAKCWJA1E35bOLH47yvJeJmKyuw4p7ZvHmHecDgqWHQU6SBFHQcyfEnqfOXRGmaZmfLBY/ifCYOqcNWrU1exe1/cXprPJD5Ei/SZMmK0TuG7HmrMFbNzUF6ZBU8ipuCPUSjlfuHlqI9VgpJ3gW8Q06dDCm+223rJ6R20fKOD6uYutXEaqOH7tQH6VVG5BfC9ufnL8eOfLLlyR4dLyrK6OFpCjQXQgLG3Mkk3JJO55/dL61isahTly2y27reXrIklZCICNAQwFgCBIAMAQGECxYFkCsCBYogWKIFiiBYBAcCAwEBgIDAQDaAbQJaBLQIIFWLxVOihqVWCKLC56kmwAHMknYAbmBzriziF8WxwlBNRVt6f7hsd6zLyNj/AFQufHwkLT711Kz6Oc8ScL42pWGmgWBC3qDs0pa7WYhQe6CAnhuDtvIxlrry7bDbfhs/DvsrayNW1F7q23dpAeF2F26bj5Tk2tbiIIrSvMyynEfE+HyyoMLSoDE16ek89OHViNtl3qEfCRrh7Z5j+mqsxem++I+Hr/UMEfaFmWILIzLRsBfsRbSTyBO5B/i+U0zXVe5mjs9pFNaj1meZ/pgsBlZxOKqKxLoCr1OvasWubnqOe/MyuszaN2Ooxxitqs8S6Xw/lTUKVOme6EUKD0bzH8pkyUtFpmWnFeJrEQ2jAqCRvynISlpvGmOOKxAw1PenSDFj0LDkPtiXGpcIPjcDXxDGs9KgtS4Rxrwz6yxAK81Ym262N7ek2Y5m0R2sV66mduu5RmaYqn2iAqQdLIeaNb7QeYPUfKTVPaYCGAjCBWRAWAIEgAwBAIgOsCyBAIFiiBYogWqIFgEBgIDAQGAgECAQIBtAloEtAFoHM+JMpx2c4+tRFVcPgcFVFPtFN37Ts1LaF2/W962o7KLWuSbpntjbtYmZ1DY6eUYfA4YpRW1lsXNtbHqSR4+UwXtMvRrWIeHhbDfpVU1GH6qgeXR6p3A9ANz8JZhpudyqz37Y1HqwPGntDq6sXhsKppjDsyNVPv1NI3Kjouq4v1tNc6jmWSKzPEOXYfiF6j3rjVqcB3vyUmxsD4DzneE690RMun5xkJTD06aaaYLBXYKGrBWuSBU5Dlb3eUj7SJ454lPHh7t/KZ/RlOA8gw6U37M6irBWYnUxYC+5/iltt+sM0a9G7UcMFFrW8ulvSRSVNhaSm4AXnuLrz8tpXOKs+icZbx6sdQ4fwqe4gNyzXJZiSTc+8TEYqR6Htb+95OJMFpwmINBQaoovoU2A1222Pd5/dLaVjekJtPmWs4SljH06ab0MSirqVCwtcA2J5Fbnrt8o9lFLeeJ/lffqpy1iZrG4+fj3PU3G74RhSx9CopvbWqrsPE2Olh6b+Rke2Y8zEu+zpl5x7ifdP+J/ttuBxtLEU1rUXFSm4uGX87HyMjExPhRelqT22jUrTOolMBDABgCBIEtAkBhAe8CwCBYogWqIFiiA4EBwIDAQDaAYBgGBIAnRJwahwjj0q1M0RCpFPM6x1IQQ4anTINxz+l8hKM9vRq6evmVfGWO7Ok3kDMzUwXEnFwyLBUcHQC1McydpU1bpQZxqJb95rmyr4C56A7qRERpims2mbz4+uHNc0/WYNsWuo1nqaKgtewcdrew5C17+ss7d20ri81jf172EoBSqhh7zKPmbSq2Ke/cS9Kuev/HmLV5n+XUeIMxxjYVwW2Okk2UHd9J5DbYyVsmOO769yHRdHnvlrWImN7j+W1eymj2eWU1PWpWYnxvVIv8AZLbX7p2w5cM4bzjn0bkv/wAkVZW8bbQKWVOdtPmNoHizPEpTpM574UpcC1yNYuPlJVjc6clgs94hpFKfYVAtdixFrdqgFhbT4Ftj0nKYpms75ifryla8RaPewVXNrY+i7m3dqXan3EVu6o1qCAwJY8/D0nK2vanhf1GHHjtEb59W55Ti6dakKtNQoYnUots97Ne3M+fpOTGpZ3qM4FMBTABgLAkAwJAIgGB6VEC1RAsUQLAIDgQGAgMBAMAiAbQJaBIAnRrnH7t+gVaauafbA0y67MFKm9j57A+RM7WdS7FJtEz7mr8E4dMJmGZYWntSOHy+tTHkKJpsfiQJivburFp+LbSO28x8mE9qmcaFWkjWqO21uagc2+EYqTad+5LJP/r6y57l+HfEV3xOIqNUdnLGo3eLOd7785p5mPu+VNO3Hl1fmI4ZZ8fh6b1QGH6wILC5UFbgjUPWW4627OZ5Q6itK5dU8SzeMynDV6AbSNRTUGGzAgbd4c/jK8M33PdDV19aVita8M1mNGtVwrhKbMdJHdBNjqU8+XWcnBWJtv4LMH2ll9rWY1HPz+vLdOB8I1LLsMjAhgrlht9Koxtf4yyNa4YM8zOW0z53LPg8r2Ph5QpQk+XnaBS6b9PjAxnECU+yLMFsGX1Nukhk7u2ezyv6fs9pHf4cN4jHa4ptJto7voSzMd/iZdXPGOn3vRon7MtnyR7KYnun65PSxJorjAza3GHo1VBuSpJuBc/wGRiZ1Ex4VZK0i+Stvxen5Np9kOeFteDqc9CsrfvMt7j107/wzl53baqa6xxHu/z4j9v3dNMiqLAEAGAIEgGBIEgGB7VWBaogWKIDgQGAgMBANoBgGAYBtAFoAM6OZ+2fHFEw9A+5V1nyJBFwfmslFNxNo9F/TZa0v238T5c+wPFz4XFDEN+t1YM4bfa+moGUnz5/OZKY7WrqY1O3pdZXpseePZW+7NfnztM9zBa9GrVamatV6Ye4H9WNN/e6AXH2+Muitq/d8QxzkxRu9d2n5eGHoZqr4P8ARrLSYKB2h5t/H0B5WO3nLaWisSzTivfU/X5sfTwZCqrbMLnYgjn5bcgJG2Sa1mW3pujjJbttP3on/bJZOK3b0kpuwBZQQp2Kjc3XkdryzBlr27lDr+jy986jccRw7g2e0BgUDvdzh11AA91+zBNwPO/KVWx2m08+YZ8V4pau48TDL8N1g+Ew7ryemrjbo242+MVjURB1E7y2n4yyJN+ckpKw+PntAS5/2M6PDm2CFdChYptfUB4C/IxExE7k59HCq2T4lalesSNHaOxYG1h9U+AlmfsmvzaegnNW+6TMa+PvY/E4nD1P0iqrMHqNpsfdFJGXTfb91B16yu86xzWIMNO7N7S08RPP9srwe1TtsNikXTTGNpIGO2pbFHt4kh3leHH21+955W/aHVRnyzNI+7Goj+3cJ1hCADAECQJAMCQJAMDIKsCxRAsAgMBAcCAbQDAkA2gGBIEgCdHK/bObVsvLANTVa7MrcmF0/Pxkq21WY963Fhtee+I4r5c1R8HWxlBUoO1IO4ZCbGqTTYryJ0jUonI+5HdaU89oy5O2kfB4c0p1aNR6CuUpVAHNJSdLAm9iOouDFpieSMV4nstqJ/d4qeB79Vdfu2F+XS5lOTNFZjhs6X7PnLGSJtqY+v0bBT4XrNRSuHBvSVtLAhh3Rtfeasl69mmLosdpzRwPCaVFxTa0PcR/eHW4XY9ec5GGJptbPX5KZZieeZ8/o39KSshPS/L0usyxkvWax8P9tX/HxZInLMzzy3jhxdODwqg+7hqI/wC2vWXV8PNza9pbXjcskCRuZ1WVm8/nsZ0UYiuFW9vLaBq3GuevhsJUrU7EkaCG5d4EfjLMURNuUL705kmfviKL0dJU1dtiCNR59L7iwlXU1rXUx5/uXp/Zlt93f45n9Imf6DMuHUy+gFqkN2mhi5HvKGBsL8gLWtJZJ3Gq+jHgnttu3qmM4gWjgMJ2KgstZ6h20p75O3iN7fCT7edzyp7uNQ7eDfeUJJAUwBAMAwJAMAwJAyirAcCA4EBgIBEAwDAkAwDAkAQBOjV+PuGGzGgi0mVK1JiyGpfQwYd5SQCRyU3seUryY4vGpb+g6+3SXmYjcT5j+HJsRwPmOCr4M1hRHbY6hRpvTfUO0YPsQQDa1zfyll61tXtUW6m05O/URLacT7MKoFSqpFXEuunVUYaL2t6qPQGS7+NRGlEzM275ncvVkPsowuHP6Rj6hxTi9RqY7tDUNzf6TjyNh4gyGuVs5p7e2PzaHg+MGZXNSmFDEkdmbWBJNtJ2sLiT6nHW2oaPs21qzNpbr7MMZh664g3Ukso0NYHqSNJ+HKMlb1p92fr5scXre+7fNkcfk4arWNMpTpqyIQb7O2k7ADrqElviJlH3xDZ8pS1CiOgo0x8kHKQHt5zoqO1z0geavuCLXB6DrA0D2mDs8Jf6LOqn1vcfcYik28LsGWuO27Rx4c7w+IRHw7W2FUM3Tu79fmfhIVpebWm0/CPVv6zPgjp8VMUc63PGvr0Z72k5omNw9M0TqpUrNq/tCdiQPAAmS9n7KvbDzO6ck9zW62kYEbblaSKOpYtdrfb8pzVrNPfhpj1EcvoVOQHkJxkGADAWAwgNAkAiAYEgZcCA4EBgIBtAMCQDAkCQDAkCGAJ0AwNR9oW39EN+7neA+0sPxgbdAwfGeM7DLsbV6rhqgH1mXSPtYTtY7p0RMRO5fOwZOzJ8ja8zZa5Yyxrw+s6fP0d+ktadRbnzxPw5/wBti4GwumjUYHm7c/qqPxmi+bWon3/7/wAPAp0XdvslkeHOIqtGvmNCoS4cqyFmNl0Aqfhuu3lLb9l437tMs4smGdWjW9/J1jBHuIPBFH2SCD0EW8QPz0gVspPT8IFbKRt9sDV+NsIlfDNSqAEKVfqOtgbjfrJ0nUuWjcOX8b5fQw+HwdNSUFepWdvpABEpqvru9T7ZTF5mNtWalYvFd8ah4MJh8KtBqfb9rqK3TUF3v0G5Es5tHdPiFd+3HulZ863LYsnyyjVxODpkKwDqypsQBq1Hr0Csb+sR3RG5hVPbvW3XSZWJeADAEBhAYQDaAQIDWgS0DMAQGAgNaAbQJAkCQDAkCQDABgCdAMDVPaKP1GCf+zzbLnPp24H+qBtRga3x2qPg2o1N1rOikb7gHX035qJOkzE7hyYieJcqzjhCnoAouUO2x7w/nK8eaLZOf6ejnx2x9PFY+H9vXkfD+Jw2FVtOoEu5Kb7FvDnyUS/JWtrRH19csOHLfFE2rOvr/TUsjxDPiqhI7zhue3vOCeflf5SOTH2zw0R1k5cUxeImY8fPl9AYA9xendH3SLK9Bb89ICVNuUCnVv4wNd40H/56jAXDU2pMV+jq91tvOdidTsmNw4txdiqjjAiqS1qDtv8A3qrH7gJV5jhpybjJvJHLFYUKXQg6TdefQ3nad2piU8kYLamJ03T2Z4Q4jNFr6ta4ai51gWBJUoP87fKdm8zwoviisbifk7NOKkgCARAYCAwgMBAIEA2gSBmgIBAgNaBIEgSBIEgSAYEgAwBOiGBqftQRv6JxNRN2oGhiB/0q6OfsBgbOtQMAw5MAw9CLwOT+2bHVP0jBUaTlezSpVbSbG7sAPsRvnLKZK0rO1uHpcme0RSN8tGr8U4lCAwWp9YWby3H8owVrMTMLuvm9ZituNc8ukPxNQTCkPemVo6e9uL6be8PMznso9puv1/j0ZO+YpywBp0awoVUIJVr6lIN7Idi3h5RM2i3bb3Luys4O+P8A6j+JdNy0jsqe22kTil6ib9NvlArI6QPOxsbfkwPNmVAVKb02HddSD8RzgcczLJSKbvWNzhVVbHkdBIJN/EXNpCdV4j1aIt7S9Zt6ah48ty3CYirTIsO+lwhtfvdQJPFNojmEOpinf92eHV+DuGaGXUNFI9o9XS71TzfbugeCgE29SesgqlnoBECQCBAcCAQIDAQGAgGAIGaEBhAMCQJAkCQJAkCQJABnQIAMDx5tgVxOHr4Zvdr0alI+jqR+MDDcAY1q2W4XtL9rRQ4WqDuRVoMaTX8zoB+MDlPtHxlSpm2Iup0UwlNLi1wEF7H6xaSzYotjj4vQ+y+stgzbiImI5/w1rBlauJpow21re+4sNz90hiwWpThp677RxdRlnujXiPf9erY+Lwv6PpB3dkGx/i/ATmLJeJnf16M+Tp8OSI7J/T9Wu5W9SjUoaTs1RQ1uqk2Nx6GWUzVte0e6Hes6DJ0/TUt5iZ+tu95M96NPr3RDzXvby3gUs0CmuBa/XyECjXqFjvtA5bxfVqB8TQAsKgYsettIH3gxbWtp44mbRDQMvoqa9MA/TXf4yOO9ojel+bDi79RZ9D5A18JhutqKD5C34TjPaIi0xD32hEQIEtAYCA4EAgQGAgNAECQMyIDCARAMCQJAkCQJAkAQJOgGAhgCBqOW2wWbYzDnu0cfT/pCn4CulkxA9SOzf5wNaXHUMZ2tUaXV3ZrGxtck7qeR3keoi9ZiIbuhik1taXiybhXDVMQ1Re4VVj3DyZjb3T8eUvnN21+9H1+TB7PutxP1+bF8bcN1jVppRYPYF9J7rXJsPLkDJYprNIcvFovw1urQq0a1BKilT2i7N9YDn1lOPHWZm0PT6rrMvZTHadxEePy183dcqQijTG/uiSecyBFxfn5TgqqW5iBUzbQPOw3uNoHLOMMQDmC6Fuuk0j/ec2P8vnIzzwtx2mkTaPkwuSZDTOIp6i2xubEcwp8pOs+6Fd68+fc7TllEJQoovurTQD0tK/JPl6rQ4NoEtAYCAwgMIDCBIEgSBmBAYQCIBgSAYAgSBIEgSAJ0CApgKYGlcc/t+Uemaf8Ar3na+YclyLKOno33S3J/2R+TRi/6LOncI/8AE9KX+qRz/gn82fF+KPyLnP7R8E/GUW/7F+PxHzhhM/8A+H/ip94l3Tfhsl9ofir9ero2X/1dP6q/dOM68fjASt1/PSBSPxP4wKMV/Vt6CByzPP2vDf8ANJ/5FkZ8/qup/wBdvnH+WIxH7YPrv+MvxeJUZ/xR8o/h2bK/2eh/g0v8gmeXXqgGBBAIgOIDCAYEgSBIH//Z",
        "horarios" => [
            "Lunes 10:00-12:00",
            "Viernes 8:00-10:00"
        ]
    ],
    4 => [
        "nombre" => "Canto Intermedio",
        "imagen" => "https://img.freepik.com/fotos-premium/chica-adolescente-feliz-cantando-karaoke-microfono_474717-128391.jpg",
        "horarios" => [
            "Martes 8:00-10:00",
            "Jueves 8:00-10:00"
        ]
        ],
        5 => [
        "nombre" => "Canto Avanzado",
        "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMpQcFyMGR15-R0WQawr7Hbi0VKlhp5WU9Gg&s",
        "horarios" => [
            "Martes 8:00-10:00",
            "Jueves 8:00-10:00"
        ]
        ],
                6 => [
        "nombre" => "Canto Avanzado",
        "imagen" => "https://cloudfront-us-east-1.images.arcpublishing.com/copesa/7S524TTAINGADMVXPMGBNU72E4.jpeg",
        "horarios" => [
            "Martes 8:00-10:00",
            "Jueves 8:00-10:00"
        ]
        ]
];
?>

    <body>
        <h2 class="text-center mb-4">Matrícula de Cursos y Horarios</h2>

        <form action="procesar_matricula.php" method="POST">
            <div class="row g-4">
                <?php foreach ($cursosDisponibles as $id => $curso): ?>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="card w-100">
                        <img src="<?= htmlspecialchars($curso['imagen']) ?>" class="card-img-top"
                            alt="<?= htmlspecialchars($curso['nombre']) ?>">
                        <div class="card-body d-flex flex-column">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="<?= $id ?>" id="curso_<?= $id ?>"
                                    name="cursos_seleccionados[]" onclick="abrirModal(<?= $id ?>)">
                                <label class="form-check-label fw-bold" for="curso_<?= $id ?>">
                                    <?= htmlspecialchars($curso["nombre"]) ?>
                                </label>
                            </div>

                            <!-- Campo oculto para enviar el horario seleccionado -->
                            <input type="hidden" name="horarios_<?= $id ?>" id="horario_hidden_<?= $id ?>" value="">

                        </div>
                    </div>
                </div>

                <!-- Modal para seleccionar horarios -->
                <div class="modal fade" id="modalHorarios_<?= $id ?>" tabindex="-1"
                    aria-labelledby="modalLabel_<?= $id ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel_<?= $id ?>">Seleccione horario para
                                    <?= htmlspecialchars($curso["nombre"]) ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body">
                                <select class="form-select" id="select_horario_<?= $id ?>">
                                    <option value="">-- Seleccione un horario --</option>
                                    <?php foreach ($curso["horarios"] as $horario): ?>
                                    <option value="<?= htmlspecialchars($horario) ?>"><?= htmlspecialchars($horario) ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="cancelarSeleccion(<?= $id ?>)"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" onclick="confirmarSeleccion(<?= $id ?>)"
                                    data-bs-dismiss="modal">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-4">
                <button type="button" class="btn btn-primary btn-lg" onclick="mostrarModalExito()">Confirmar Matrícula</button>
            </div>
        </form>

        <script>
        // Asumiendo Bootstrap 5, aseguramos acceso a Modal
        let modals = {};

        function abrirModal(id) {
            const checkbox = document.getElementById('curso_' + id);
            if (checkbox.checked) {
                // Abrimos modal
                if (!modals[id]) {
                    const modalEl = document.getElementById('modalHorarios_' + id);
                    modals[id] = new bootstrap.Modal(modalEl);
                }
                modals[id].show();
            } else {
                // Si desmarcan, limpiamos selección
                document.getElementById('horario_hidden_' + id).value = "";
                document.getElementById('select_horario_' + id).value = "";
            }
        }

        function confirmarSeleccion(id) {
            const select = document.getElementById('select_horario_' + id);
            const horarioSeleccionado = select.value;
            const hiddenInput = document.getElementById('horario_hidden_' + id);
            const checkbox = document.getElementById('curso_' + id);

            if (horarioSeleccionado) {
                hiddenInput.value = horarioSeleccionado;
                checkbox.checked = true;
            } else {
                // Si no seleccionó horario, desmarcamos el checkbox para no enviar ese curso
                checkbox.checked = false;
                hiddenInput.value = "";
                alert("Debe seleccionar un horario para el curso.");
            }
        }

        function cancelarSeleccion(id) {
            const checkbox = document.getElementById('curso_' + id);
            checkbox.checked = false;
            document.getElementById('horario_hidden_' + id).value = "";
            document.getElementById('select_horario_' + id).value = "";
        }
        </script>
        <script>
        function mostrarModalExito() {
            const modalExitoEl = document.getElementById('modalExito');
            const modal = new bootstrap.Modal(modalExitoEl);
            modal.show();
        }
        </script>
        <div class="modal fade" id="modalExito" tabindex="-1" aria-labelledby="modalExitoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-success">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="modalExitoLabel">¡Éxito!</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        Matrícula realizada con éxito.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php PrintFooterInterno(); ?>
    <?php PrintScriptInerno(); ?>
</html>